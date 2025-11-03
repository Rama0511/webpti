import React from 'react';
import { Link } from '@inertiajs/react';

interface Detection {
  class_name: string;
  confidence: number;
  box_2d: number[];
  db_deskripsi: string;
  db_sumber: string;
}

interface DetectionResultProps {
  output_image_url: string;
  detections: Detection[];
}

interface ResultProps {
  detectionResult: DetectionResultProps | null;
  errorMessage: string | null;
}

const Result: React.FC<ResultProps> = ({ detectionResult, errorMessage }) => {

  if (errorMessage || !detectionResult) {
    return (
      <div className="min-h-screen bg-white p-4 flex flex-col items-center justify-center">
        <h1 className="text-xl font-bold text-red-600 mb-4">Deteksi Gagal</h1>
        <p className="text-gray-700 text-center mb-6">{errorMessage || "Tidak ada hasil deteksi yang diterima."}</p>
        <Link href="/" className="bg-gray-900 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition">
          Kembali ke Home
        </Link>
      </div>
    );
  }

  const mainDetection = detectionResult.detections[0];
  const mainPlantName = mainDetection?.class_name ?? 'Tanaman Tidak Dikenali';
  const mainPlantDescription = mainDetection?.db_deskripsi ?? 'Deskripsi belum tersedia.';

  return (
    <div className="min-h-screen bg-gray-900 text-white">
      
      <header className="flex items-center p-4 border-b border-gray-800 bg-gray-900 sticky top-0 z-10">
        <Link href="/deteksi-tanaman" className="p-2 mr-4 text-gray-400 hover:text-white">
          <div className="w-6 h-6 bg-gray-400 mask mask-x"></div> 
        </Link>
        <h1 className="text-lg font-semibold text-white">Deteksi Tanaman Obat</h1>
      </header>
      
      <main className="pb-24 flex justify-center">
        
        {/* Kontainer Utama yang Membatasi Lebar (max-w-md) dan Menambah Padding (p-4) */}
        <div className="w-full max-w-md p-4">
            
            {/* Kontainer Gambar - Memberi Jarak Atas dan Bawah */}
            <div className="relative w-full overflow-hidden bg-gray-800 rounded-lg shadow-xl mb-6"> 
                <img 
                    src={detectionResult.output_image_url} 
                    alt="Hasil Deteksi Tanaman" 
                    // img-fluid atau w-full agar mengisi kontainernya
                    className="w-full h-auto object-contain" 
                />
            </div>

            {/* Area Deskripsi/Teks */}
            <div className="p-0">
                <h2 className="text-xl font-bold text-white mb-2">
                    Tanaman tersebut adalah <span className="text-green-400">{mainPlantName}</span>
                </h2>
                
                <div 
                    className="prose prose-sm prose-invert mt-4" 
                    dangerouslySetInnerHTML={{ __html: mainPlantDescription.replace(/\n/g, '<br/>') }}
                >
                </div>
            </div>

        </div>
      </main>
      
      <footer className="fixed bottom-0 left-0 right-0 p-4 bg-gray-900 border-t border-gray-800">
        <Link 
          href="/deteksi-tanaman" 
          className="w-full text-center bg-gray-700 text-white font-bold py-3 rounded-xl block hover:bg-gray-600 transition"
        >
          Kembali
        </Link>
      </footer>
    </div>
  );
};

export default Result;