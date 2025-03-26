<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $images = [
            "https://images.unsplash.com/photo-1511884642898-4c92249e20b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80",
            "https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80",
            "https://images.unsplash.com/photo-1434725039720-aaad6dd32dfe?ixlib=rb-4.0.3&auto=format&fit=crop&w=1642&q=80",
            "https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80",
            "https://images.unsplash.com/34/BA1yLjNnQCI1yisIZGEi_2013-07-16_1922_IMG_9873.jpg?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80",
            "https://images.unsplash.com/photo-1534447677768-be436bb09401?ixlib=rb-4.0.3&auto=format&fit=crop&w=1194&q=80",
            "https://images.unsplash.com/photo-1559666126-84f389727b9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1177&q=80",
            "https://images.unsplash.com/photo-1527489377706-5bf97e608852?ixlib=rb-4.0.3&auto=format&fit=crop&w=1559&q=80",
            "https://images.unsplash.com/photo-1464983953574-0892a716854b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80",
            "https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1171&q=80",
            "https://images.unsplash.com/photo-1462400362591-9ca55235346a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1664&q=80",
            "https://images.unsplash.com/photo-1484591974057-265bb767ef71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80",
            "https://images.unsplash.com/photo-1508163223045-1880bc36e222?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80",
            "https://images.unsplash.com/photo-1503424886307-b090341d25d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1176&q=80",
            "https://images.unsplash.com/photo-1426604966848-d7adac402bff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80",
            "https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80",
            "https://images.unsplash.com/photo-1431631927486-6603c868ce5e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80",
        ];

        for ($i = 0; $i < 12; $i++) {
            Tour::create([
                'title' => 'Paket Wisata ' . $faker->city,
                'location' => $faker->city . ', Indonesia',
                'price' => $faker->numberBetween(250000, 1500000),
                'duration_days' => $faker->numberBetween(1, 7),
                'image' => $images[$i % count($images)], // ambil gambar dari array secara looping
                'is_recommended' => $faker->boolean(40),
                'keterangan' => $faker->paragraph(3),
            ]);
        }
    }
}
