<?php

namespace Database\Seeders;

use App\Models\Homestays;
use App\Models\HomestaysImage;
use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'role' => 'admin',
            'verified' => 'true',
            'no_hp' => '628' . str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // User::factory(10)->create();
        $user = [
            'satu',
            'dua',
            'tiga',
            'empat',
        ];

        for ($i = 0; $i < count($user); $i++) {
            User::create([
                'name' => $user[$i],
                'email' => $user[$i] . '@gmail.com',
                'password' => bcrypt($user[$i] . '@gmail.com'),
                'role' => 'owner',
                'verified' => 'true',
                'no_hp' => '628' . str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $title_news = [
            'Tren Perjalanan Terbaru: Homestay Jadi Pilihan Populer Wisatawan',
            'Bisnis Homestay Meningkat Pesat: Pengusaha Mulai Investasi di Sektor Akomodasi Ini',
            'Homestay Berkonsep Ramah Lingkungan: Berbagai Inisiatif Menuju Akomodasi Berkelanjutan',
            'Homestay di Era Digital: Platform Online Mempermudah Wisatawan Temukan Penginapan Lokal',
        ];

        $description_news = [
            'Homestay semakin populer di kalangan wisatawan yang mencari pengalaman lokal yang autentik. Menawarkan kenyamanan rumah serta interaksi langsung dengan tuan rumah, homestay menjadi alternatif menarik bagi akomodasi tradisional',
            'Bisnis homestay sedang mengalami pertumbuhan pesat, dengan pengusaha yang semakin tertarik untuk berinvestasi di sektor akomodasi ini. Fleksibilitas, biaya rendah, dan permintaan yang meningkat membuat homestay menjadi pilihan menarik',
            'Semakin banyak homestay yang mengadopsi konsep ramah lingkungan dengan memperkenalkan inisiatif-inisiatif berkelanjutan, seperti penggunaan energi terbarukan, daur ulang, dan produk lokal, sebagai upaya untuk mengurangi jejak karbon mereka',
            'Platform online telah mempermudah wisatawan untuk menemukan homestay yang sesuai dengan preferensi mereka. Dengan banyaknya pilihan dan ulasan dari pengguna sebelumnya, mencari akomodasi lokal menjadi lebih mudah dan transparan',
        ];

        $image_news = [
            '7-Tips-Bisnis-Homestay-Kekinian-yang-Menguntungkan-3.jpeg',
            'cfdfa967-ad99-410c-8eeb-62d3f82f0c06.jpeg',
            'Mengelola-Homestay-di-Era-Digital-Memahami-Tren-Teknologi.jpg',
            'TrenBisnisIndonesia2024HomestayPenyewaanPromosi.jpg',
        ];

        for ($i = 0; $i < count($title_news); $i++) {
            News::create([
                'title' => $title_news[$i],
                'user_id' => $i + 1,
                'description' => $description_news[$i],
                'image' => 'img/news/' . $image_news[$i],
            ]);
        }

        $homestays_slug = [
            'blessing_homestay',
            'boraspati_homestay',
            'chantika_homestay',
            'martogi_homestay',
            'mawar_homestay',
            'melati_homestay',
            'mentari_homestay',
            'verwest_homestay',
        ];

        $homestays_names = [
            'Blessing Homestay',
            'Boraspati Homestay',
            'Chantika Homestay',
            'Martogi Homestay',
            'Mawar Homestay',
            'Melati Homestay',
            'Mentari Homestay',
            'Verwest Homestay',
        ];

        //looping for
        for ($i = 0; $i < count($homestays_names); $i++) {
            Homestays::create([
                'name' => $homestays_names[$i],
                'user_id' => $i % 4 + 2,
                'slug' => $homestays_slug[$i],
                'description' => 'Selamat datang di ' . $homestays_names[$i] . ', oase tenang di tengah kota Balige yang ramah dan hangat. Terletak strategis, kami menawarkan satu rumah utuh yang nyaman dan dilengkapi dengan fasilitas lengkap untuk memenuhi kebutuhan Anda. Nikmati kenyamanan seperti di rumah sendiri dengan suasana yang tenang dan pemandangan alam yang indah. Dengan akses mudah ke berbagai atraksi lokal, ' . $homestays_names[$i] . ' adalah pilihan sempurna untuk wisatawan dan pelancong bisnis. Raih momen berharga Anda di Balige dengan menginap bersama kami di ' . $homestays_names[$i] . '!',
                'features' => 'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.',
                'room_size' => '20 X 40 m',
                'occupancy' => 'Up to 8 Adults',
                'view' => 'City View',
                'smoking' => 'No',
                'bed_size' => 'King and regular',
                'location' => 'Huta Simangunsong, pantai, Lumban Bulbul, Kec. Balige, Sumatera Utara',
                'room_service' => 'Yes',
                'swimming_pool' => 'No',
                'price' => '1000000',
            ]);
        }

        for ($i = 0; $i < count($homestays_slug); $i++) {
            for ($j = 1; $j <= 5; $j++) {
                HomestaysImage::create([
                    'homestays_id' => $i + 1,
                    'image_location' => 'img/homestay/' . $homestays_slug[$i] . '/' . $j . '.jpg',
                ]);
            }
        }
    }
}
