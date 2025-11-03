import React, { useRef } from 'react';
import { Link, useForm } from '@inertiajs/react';

const Deteksi: React.FC = () => {
  const fileInputRef = useRef<HTMLInputElement>(null);

  const { data, setData, post, processing, errors } = useForm({
    photo: null as File | null,
  });

  const handleUploadClick = () => {
    if (fileInputRef.current) {
      fileInputRef.current.click();
    }
  };

  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const file = e.target.files ? e.target.files[0] : null;

    if (!file) {
      return; 
    }

    setData('photo', file);

    post(route('predict'), { 
      onStart: () => console.log("Mulai mengunggah dan memprediksi..."),
      onError: (errors) => {
        console.error("Error saat upload:", errors);
      },
      onFinish: () => {
        if (fileInputRef.current) {
          fileInputRef.current.value = '';
        }
      }
    });
  };

  return (
    <div className="min-h-screen bg-white text-gray-900">
      
      <header className="flex items-center p-4 border-b border-gray-200">
        <Link href="/" className="p-2 mr-4 text-gray-600 hover:text-gray-800">
          <div className="w-6 h-6 bg-gray-600 mask mask-arrow-left"></div> 
        </Link>
        <h1 className="text-lg font-semibold text-black">Deteksi Tanaman Obat</h1>
      </header>
      
      <main className="flex flex-col items-center pt-24 px-6">
        
        <input
          type="file"
          ref={fileInputRef}
          onChange={handleFileChange}
          className="hidden" 
          name="photo" 
          accept="image/*"
        />
        
        {processing && (
            <p className="text-blue-500 font-semibold mb-4">Mendeteksi... Mohon tunggu.</p>
        )}

        <p className="text-base text-center text-black mb-10 max-w-sm">
          Silahkan gunakan kamera atau lampiran foto tanaman
        </p>
        
        {errors.photo && (
            <p className="text-sm text-red-500 mb-4">{errors.photo}</p>
        )}

        <button 
          type="button" 
          onClick={handleUploadClick} 
          disabled={processing}
          className="flex items-center space-x-2 bg-green-500 text-white font-bold px-8 py-3 rounded-full shadow-lg hover:bg-green-600 transition duration-150 disabled:opacity-50"
        >
          <div className="w-5 h-5 bg-white mask mask-upload"></div> 
          <span>Upload Foto</span>
        </button>
        
      </main>
    </div>
  );
};

export default Deteksi;