<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Tanaman;
use Inertia\Inertia;

class DetectionTestController extends Controller
{
    private const API_URL = 'http://localhost:8001/predict/';
    private const BASE_IMAGE_URL = 'http://localhost:8001/';

    public function index()
    {
        return Inertia::render('Deteksi');
    }

    public function predict(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:10240',
        ]);

        $file = $request->file('photo');
        $detectionResult = null;
        $errorMessage = null;

        try {
            $response = Http::timeout(60)->asMultipart()->post(self::API_URL, [
                [
                    'name'     => 'file',
                    'contents' => fopen($file->getRealPath(), 'r'),
                    'filename' => $file->getClientOriginalName(),
                ],
            ]);

            $data = $response->json();

            if ($response->successful() && $data['status'] === 'success') {
                
                $detections = $data['result']['detections'] ?? [];
                
                $enrichedDetections = [];
                foreach ($detections as $detection) {
                    $className = strtolower($detection['class_name']);

                    $plantDetail = Tanaman::where('nama', $className)->first();

                    $enrichedDetections[] = array_merge($detection, [
                        'db_deskripsi' => $plantDetail->deskripsi ?? 'Deskripsi belum tersedia di DB.',
                        'db_sumber'    => $plantDetail->sumber ?? 'Sumber belum tersedia di DB.',
                    ]);
                }

                $detectionResult = [
                    'output_image_url' => self::BASE_IMAGE_URL . $data['result']['output_path'],
                    'detections'       => $enrichedDetections,
                ];

            } else {
                $errorMessage = "Deteksi gagal. Pesan: " . ($data['message'] ?? $response->body());
            }

        } catch (\Throwable $e) {
            $errorMessage = "Error Koneksi: Gagal terhubung ke API Deteksi di " . self::API_URL . ". " . $e->getMessage();
        }

        return Inertia::render('Result', [
            'detectionResult' => $detectionResult,
            'errorMessage' => $errorMessage,
        ]);
    }
}