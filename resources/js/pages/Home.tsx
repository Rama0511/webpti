import React from 'react';
import { Link } from '@inertiajs/react';

const Home: React.FC = () => {
  return (
    <div className="min-h-screen bg-gray-900 text-white p-4">
      
      <header className="flex justify-between items-center mb-6 pt-4">
        <div>
          <p className="text-sm text-gray-400">Hi, Pengunjung</p>
          <h1 className="text-base font-semibold">Semoga anda sehat selalu!</h1>
        </div>
        <div className="w-10 h-10 rounded-full bg-gray-600 border-2 border-white">
        </div>
      </header>
      
      <div className="relative bg-gray-800 rounded-xl shadow-lg p-5 mb-6 overflow-hidden">
        <div className="absolute right-0 top-0 h-full w-2/5 overflow-hidden rounded-r-xl">
          <div className="w-full h-full bg-cover bg-center opacity-60" style={{ backgroundImage: "url('/images/salad-placeholder.jpg')" }}></div>
        </div>
        
        <div className="w-3/5 relative z-10">
          <h2 className="text-xl font-bold text-green-400 mb-2">Ayo makan sehat</h2>
          <p className="text-sm text-gray-300 mb-3 pr-2">
            Dengan makan sayur sehat organik dari pkk agropark lampung, dapat diambil langsung atau melalui ojol
          </p>
          
          <div className="flex space-x-2">
            <span className="text-xs font-bold bg-white text-gray-900 px-1 py-0.5 rounded">BCA</span>
            <span className="text-xs font-bold bg-white text-gray-900 px-1 py-0.5 rounded">BNI</span>
            <span className="text-xs font-bold bg-white text-gray-900 px-1 py-0.5 rounded">Mastercard</span>
          </div>
        </div>
        
        <div className="absolute bottom-3 left-5 flex space-x-1.5">
          <span className="w-2 h-2 rounded-full bg-white opacity-100"></span>
          <span className="w-2 h-2 rounded-full bg-white opacity-50"></span>
          <span className="w-2 h-2 rounded-full bg-white opacity-50"></span>
        </div>
      </div>
      
      <div className="bg-blue-500 rounded-xl shadow-xl p-5 mb-6 relative overflow-hidden">
        <div className="absolute inset-0 z-0 opacity-10">
            <span className="w-4 h-4 bg-white rounded-full absolute top-2 right-4"></span>
            <span className="text-white text-4xl absolute top-6 right-8 transform rotate-12">*</span>
            <span className="text-white text-6xl absolute bottom-0 left-0 transform rotate-12">.</span>
        </div>
        
        <div className="relative z-10">
          <h3 className="text-xl font-bold text-white mb-2">
            Fitur baru deteksi tanaman obat menggunakan AI
          </h3>
          <Link 
            href="/deteksi-tanaman" 
            className="inline-block bg-yellow-400 text-gray-900 font-bold py-2 px-4 rounded-lg shadow-md hover:bg-yellow-500 transition duration-150"
          >
            Coba Sekarang
          </Link>
        </div>
      </div>
      
      <div className="bg-gray-300 rounded-xl h-40 shadow-md">
      </div>
      
    </div>
  );
};

export default Home;