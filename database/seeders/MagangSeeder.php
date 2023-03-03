<?php

namespace Database\Seeders;

use App\Models\Magang;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $descExtra = [
            "Pramuka merupakan Ekstrakurikuler yang wajib diikuti oleh siswa SMK NEGERI 6 JEMBER.
            Ekstrakurikuler ini memiliki organisasi yang di kenal dengan Dewan Ambalan. di SMK Negeri 6 Jember Dewan Ambalan
            dikenal dengan Dewan Arjuna Srikandi.",
            "Belajar disiplin, tepat waktu dan mau menerima konsekuensi sobat skanamber harus mengikuti
            Ekstrakurikuler Paskibra. Yang nantinya sobat Skanamber akan menjadi capas (calon paskibra) Pasknam atau Paskibra SMK Negeri 6 Jember",
            "Suka dalam bidang kesehatan? sobat Skanamber bisa nih mengikuti Ekstrakurikuler Palang Merah Remaja
            SMK Negeri 6 Jember. sobat skanamber nanti bisa lho mengikuti ajang lomba tingkat SMA/K/sederajat
            yang diadakan panitia Palang Merah Indonesia.",
            "Melakukan teknik Dribble, Passing, Chesst pass dalam permainan bola dan masih ada beberapa teknik yang harus sobat Skanamber kuasai dalam permainan bola Basket. Join with Onesixer dan pahami teknik basket yang benar!",
            "Menyanyikan lagu-lagu formal dan nonformal, sebuah hobi di bidang vocal yang dapat bermanfaat jika sobat skanamber mau bergabung di Paduan Suara Skanamber",
            "Berambisi mencetak nilai paling tinggi dan melatih kecepatan berlari, Ekstrakurikuler Sepak bola menjadi sarana penyalur hobi sobat skamber yang suka dibidang olahraga bola besar.",
            "Berlari mengejar bola sampai mencetak gol sebanyak-banyaknya di lakukan oleh sedikit jumlah pemain merupakan Ekstrakurikuler Futsal.
            Tidak hanya siswa melainkan siswi juga di perbolehkan mengikuti Ekstrakurikuler Futsal.",
            "Bidang olahraga yang melatih ketangkasan dan kekuaatan memukul bola. sobat Skanamber bisa mengikuti
            Ekstrakurikuler Voli SMK Negeri 6 Jember yang biasanya akan di perlombakan saat classmeeting.",
            "SMK Negeri 6 Jember Memiliki 2 Perguruan Kesenian yang termasuk dalam bidang olahraga lho, yang setiap gerakan yang di tampilkan menujukan gerakan seni tersendiri, yaitu: Pencak Organisasi dan Merpati Putih.",
            "Sobat Skanamber akan dikenal sebagai “siswa rohis” karena mengikuti Ekstrakurikuler yang berkaitan dengan agama Islam dan mengurus jadwal masjid.",
            "Hello guys! do you want to learn english? apakah kamu mau belajar bahasa inggris?.",
            "Seni Koreografi dan kontemporer, gerakan dengan penuh makna, warisan budaya yang tidak boleh hilang. Sobat skanamber yang tertarik dalam bidang seni tari sangat disarankan mengikuti seni Tari Maheswara SMK Negeri 6 Jember untuk membudidayakan seni Tari Indonesia.",
            "Dum... stak... dum... dum... suara drum berbunyi para mayoret dan gitapati mulai memandu iringan musik dari pemain simbal, bass, brass dan lain sebagainya",
        ];
        $dayExtra = [
            "Jumat",
            "Sabtu",
            "Kamis",
            "Selasa",
            "Kamis",
            "Selasa",
            "Senin",
            "Rabu",
            "Kamis",
            "Rabu",
            "Selasa",
            "Kamis",
            "Senin",
        ];
        $timeExtra = [
            '15:00',
            '08:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
            '15:00',
        ];

        $listExtra = [
            'Pramuka',
            'Paskibra (Pasukan Pengibar Bendera)',
            'PMR (Palang Merah Remaja)',
            'Basket',
            'Paduan Suara',
            'Sepak Bola',
            'Futsal',
            'Voli',
            'Teater dan Kesenian',
            'Remas (Remaja Masjid)',
            'English Club',
            'Tari',
            'Marching band'
        ];

        $photoExtra = [
            'assets/extra-img/pramuka.png',
            'assets/extra-img/paskib.png',
            'assets/extra-img/pmr.png',
            'assets/extra-img/basket.png',
            'assets/extra-img/paduan.png',
            'assets/extra-img/sepak.png',
            'assets/extra-img/futsal.png',
            'assets/extra-img/voli.png',
            'assets/extra-img/teater.png',
            'assets/extra-img/remas.png',
            'assets/extra-img/ec.png',
            'assets/extra-img/tari.png',
            'assets/extra-img/mb.png',
        ];

        // $date= Carbon::parse('l')->addDay(rand(1,336))->format('l')->locale();
        $i = 0;
        foreach($listExtra as $extra){
            Magang::create([
                'name' => $extra,
                'description' => $descExtra[$i],
                'photo_path' => $photoExtra[$i],
                'day_operation' => $dayExtra[$i],
                'time_operation' =>$timeExtra[$i],
                'total_joined' => 0
            ]);
            $i++;
        }

    }
}
