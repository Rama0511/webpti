<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji API Deteksi Tanaman (SSR)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-xl">
        <h1 class="text-3xl font-bold mb-6 text-center text-green-700">🧪 Uji API Deteksi Tanaman (SSR Mode)</h1>

        {{-- FORMULIR UPLOAD --}}
        <form action="{{ route('test.detection.predict') }}" method="POST" enctype="multipart/form-data" 
              class="mb-8 p-4 border rounded-lg bg-green-50">
            @csrf
            
            <label for="photo" class="block text-lg font-medium text-gray-700 mb-2">Unggah Foto Tanaman:</label>
            <input type="file" name="photo" id="photo" accept="image/*" required 
                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 p-2.5 mb-4 @error('photo') border-red-500 @enderror">
            
            @error('photo')
                <p class="text-red-500 text-xs italic mb-2">{{ $message }}</p>
            @enderror

            <button type="submit" 
                    class="px-5 py-2.5 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-300 transition duration-150">
                Deteksi Sekarang
            </button>
        </form>

        {{-- AREA HASIL/ERROR --}}
        <div id="resultArea">
            
            {{-- TAMPILKAN ERROR --}}
            @if ($errorMessage)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Error Deteksi!</strong>
                    <span class="block sm:inline">{{ $errorMessage }}</span>
                </div>
            @endif

            {{-- TAMPILKAN HASIL SUKSES --}}
            @if ($detectionResult)
                <h2 class="text-2xl font-semibold mb-4 text-green-800 border-b pb-2">Hasil Deteksi</h2>
                
                <div class="mb-6">
                    <p class="font-medium text-gray-600">Gambar Hasil Deteksi:</p>
                    <img src="{{ $detectionResult['output_image_url'] }}" alt="Output Deteksi" 
                         class="mt-2 max-w-full h-auto rounded-lg border shadow-md">
                </div>

                <h3 class="text-xl font-semibold mb-2 text-green-700">Detail Deteksi Ditemukan:</h3>
                <ul id="detectionsList" class="space-y-4">
                    @foreach ($detectionResult['detections'] as $detection)
                        <li class="p-4 border rounded-md shadow-sm bg-gray-50">
                            <p class="text-lg font-bold text-green-600">Nama Tanaman: {{ strtoupper($detection['class_name']) }}</p>
                            <p>Tingkat Kepercayaan (Confidence): <span class="font-mono text-blue-600">{{ number_format($detection['confidence'] * 100, 2) }}%</span></p>
                            
                            {{-- DATA DARI DATABASE LOKAL LARAVEL --}}
                            <p class="mt-2 text-gray-700"><span class="font-semibold">Deskripsi:</span> {{ $detection['db_deskripsi'] }}</p>
                            <p class="text-sm text-gray-500"><span class="font-semibold">Sumber:</span> {{ $detection['db_sumber'] }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>
</html>