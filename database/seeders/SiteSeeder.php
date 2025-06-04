<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'email' => 'andalas.tourorganizer@gmail.com',
            'alamat' => 'Menjer RT.4 / RW.2 Desa Menjer, Kecamatan Garung, Kabupaten Wonosobo',
            'kontak' => '0821-2292-2673 / 0852-9246-3786',
            'whatsapp' => '0821-2292-2673',
            'instagram' => 'https://www.instagram.com/andalas.tourorganizer?igsh=MWhxcHc5ZWh1ZWhpcA%3D%3D&utm_source=qr',
            'tiktok' => 'https://www.tiktok.com/@andalas.tourorganizer?_t=ZS-8wj8z4p5vgz&_r=1',
            'sambutan' => '"Tak Kenal Maka Tak Sayang"
Perkenankan kami memperkenalkan diri. Kami adalah Andalas Tour Organizer (NIB. 0804250038312), penyedia jasa pelayanan pariwisata yang beralamat di Menjer RT004 / RW002, Kecamatan Garung, Kabupaten Wonosobo. Kami bergerak di bidang penyelenggaraan paket wisata berkualitas yang siap menghadirkan pengalaman perjalanan tak terlupakan bagi Anda.

Andalas Tour Organizer merupakan biro pariwisata terkemuka di Kabupaten Wonosobo, khususnya untuk wilayah Dieng dan sekitarnya. Kami menyediakan berbagai paket wisata yang dapat disesuaikan berdasarkan jumlah dan jenis obyek wisata yang Anda pilih, dengan harga kompetitif dan transparan.

Sebagai agen wisata profesional, kami didukung oleh tim berpengalaman dan armada transportasi yang andal, siap melayani kebutuhan perjalanan Anda dengan nyaman dan aman. Kami bangga menjadi partner terpercaya dalam menjelajahi keindahan alam dan budaya Wonosobo.

Website kami dirancang modern dan responsif, memudahkan Anda dalam mencari informasi paket wisata, melakukan pemesanan, dan mendapatkan update terbaru tentang destinasi menarik di Wonosobo dan Dieng. Dengan Andalas Tour Organizer, Anda tak hanya berwisata, tapi juga merasakan pengalaman penuh makna.

Merupakan kehormatan bagi kami untuk dipercaya menjadi bagian dari perjalanan wisata Anda. Demikian proposal penawaran paket wisata dari kami. Atas perhatian dan kepercayaan Anda, kami ucapkan terima kasih sebesar-besarnya.',
            'kontak_kami' => 'Andalas Tour Organizer telah melayani perjalanan wisata di Wonosobo selama bertahun-tahun. Kami berkomitmen memberikan pengalaman wisata yang berkesan dengan layanan profesional dan personal. Dengan pemahaman mendalam tentang destinasi lokal, kami membantu Anda menjelajahi keindahan alam dan budaya secara optimal.',
        ]);
    }
}
