import React from 'react';
import { Link } from '@inertiajs/react';

const Welcome: React.FC = () => {
  return (
    <div className="flex flex-col justify-between items-center min-h-screen w-full bg-white pt-[15vh] pb-[5vh] box-border">
      
      <div className="flex flex-col items-center">
        <div className="w-[120px] h-[120px] bg-[#E0DEDE] mb-[30px]">
        </div>
        
        <Link 
          href="/login" 
          className="w-[300px] h-[80px] bg-[#F5C7C7] text-black font-bold text-lg flex justify-center items-center no-underline hover:bg-[#ebbbbb] transition duration-150"
        >
          MASUK
        </Link>
      </div>

      <div className="text-center">
        <p className="text-base font-bold text-black mb-[4px]">Deteksi Tanaman PKK Agropark</p>
        <p className="text-sm text-gray-600">v1.1</p>
      </div>

    </div>
  );
};

export default Welcome;