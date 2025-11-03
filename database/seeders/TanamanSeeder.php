<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TanamanSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Tanaman sesuai dengan deskripsi yang diberikan
        $tanamanData = [
            [
                'nama' => 'kucai',
                'deskripsi' => 'Kucai (Allium tuberosum) memiliki banyak manfaat kesehatan. Kucai kaya akan kandungan kolin, folat, vitamin C, vitamin K, dan antioksidan yang membantu meningkatkan daya ingat dan konsentrasi, menjaga kesehatan tulang dengan mencegah osteoporosis, serta melancarkan sistem pencernaan melalui kandungan seratnya. Selain itu, kucai juga berperan dalam menurunkan risiko penyakit kardiovaskular dengan mengurangi peradangan dan menurunkan kolesterol dalam darah. Vitamin C yang tinggi dalam kucai meningkatkan imunitas dengan merangsang produksi sel darah putih serta kolagen, penting untuk regenerasi jaringan dan pembuluh darah. Kucai juga memiliki sifat diuretik yang membantu mendetoksifikasi tubuh dengan merangsang pengeluaran racun melalui urin. Penelitian menunjukkan bahwa ekstrak kucai bahkan dapat menghambat pertumbuhan sel kanker, sehingga menurunkan risiko kanker. Asam folat yang terdapat pada kucai juga penting untuk ibu hamil karena dapat mencegah cacat lahir pada janin.',
                'sumber' => 'Kompilasi Manfaat Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'cabai',
                'deskripsi' => 'Cabai (Capsicum spp.) kaya akan senyawa capsaicin yang membawa manfaat utama bagi kesehatan jantung dengan mencegah pembekuan darah dan menjaga elastisitas pembuluh darah. Capsaicin juga memiliki sifat antiinflamasi dan antioksidan, yang membantu menurunkan risiko penyakit kardiovaskular. Cabai juga berperan sebagai bumbu dapur yang meningkatkan nafsu makan dan metabolisme. Konsumsi cabai secara teratur dapat meningkatkan sirkulasi darah dan membantu mengurangi kadar kolesterol jahat dalam tubuh. Selain itu, cabai mengandung vitamin C dan provitamin A yang membantu meningkatkan daya tahan tubuh dan kesehatan kulit.',
                'sumber' => 'Kompilasi Manfaat Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'terong',
                'deskripsi' => 'Manfaat terong terutama berasal dari kandungan antioksidannya seperti nasunin yang melindungi sel-sel tubuh dari kerusakan akibat radikal bebas. Terong juga kaya serat yang baik untuk kesehatan pencernaan dan membantu menurunkan kadar kolesterol dalam darah. Asupan terong dapat membantu mengendalikan kadar gula darah dan mencegah diabetes tipe 2. Konsumsi terong secara rutin dapat mendukung kesehatan jantung dan menurunkan risiko penyakit kronis.',
                'sumber' => 'Kompilasi Manfaat Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'tomat',
                'deskripsi' => 'Tomat kaya akan likopen, sebuah antioksidan kuat yang berperan melindungi tubuh dari kanker dan penyakit jantung. Tomat juga mengandung vitamin C, potasium, folat, dan vitamin K yang penting untuk kesehatan kulit, tulang, dan sistem kekebalan tubuh. Probabilitas risiko kanker prostat dan penyakit kardiovaskular menurun dengan konsumsi tomat rutin. Likopen dalam tomat juga membantu menjaga elastisitas dan kesehatan pembuluh darah.',
                'sumber' => 'Kompilasi Manfaat Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'okra',
                'deskripsi' => 'Okra mengandung serat larut dan antioksidan yang membantu menurunkan kadar kolesterol dan gula darah, sehingga baik untuk penderita diabetes dan penyakit jantung. Okra memiliki vitamin C dan K yang baik untuk imunitas dan kesehatan tulang, serta mampu melindungi organ hati dan memperlancar pencernaan. Okra juga mengandung senyawa antiinflamasi yang dapat membantu mengurangi risiko beberapa penyakit kronis.',
                'sumber' => 'Kompilasi Manfaat Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'sawi',
                'deskripsi' => 'Sawi adalah sumber vitamin A, C, dan K yang tinggi serta mineral seperti kalsium dan zat besi, memberikan manfaat untuk menjaga kesehatan kulit, tulang, dan sistem kekebalan tubuh. Kandungan serat yang tinggi juga membuat sawi baik untuk pencernaan dan menurunkan risiko kanker usus. Sawi memiliki antioksidan yang membantu melawan radikal bebas yang bisa menyebabkan penuaan dini dan penyakit degeneratif.',
                'sumber' => 'Kompilasi Manfaat Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data ke tabel 'tanaman'
        DB::table('tanaman')->insert($tanamanData);
    }
}