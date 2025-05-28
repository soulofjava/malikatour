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
            'instagram' => 'https://www.instagram.com/andalas.tourorganizer?igsh=MWhxcHc5ZWh1ZWhpcA%3D%3D&utm_source=qr',
            'tiktok' => 'https://www.tiktok.com/@andalas.tourorganizer?_t=ZS-8wj8z4p5vgz&_r=1',
        ]);
    }
}
