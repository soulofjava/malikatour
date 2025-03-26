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
            'email' => 'email@email.com',
            'alamat' => 'Wonosobo',
            'kontak' => '085643710007',
        ]);
    }
}
