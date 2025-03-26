<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Homestay;
use Faker\Factory as Faker;


class HomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Gambar-gambar yang akan digunakan (URL dari Unsplash)
        $imageList = [
            "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85",
            "https://images.unsplash.com/photo-1570129477492-45c003edd2be",
            "https://images.unsplash.com/photo-1564013799919-ab600027ffc6",
            "https://images.unsplash.com/photo-1599423300746-b62533397364",
            "https://demo-source.imgix.net/house.jpg",
            "https://images.unsplash.com/photo-1600585154340-be6161a56a0c", // Cozy home
            "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb",    // Balcony view
            'https://img.freepik.com/free-photo/modern-studio-apartment-design-with-bedroom-living-space_1262-12375.jpg?t=st=1742968701~exp=1742972301~hmac=a57facca02929bfd3054445a97a24aa659e4daa0ca5f1491a95e846d122d4d3a&w=996',
            'https://img.freepik.com/free-photo/charming-yellow-house-with-wooden-windows-green-grassy-garden_181624-8074.jpg?t=st=1742968727~exp=1742972327~hmac=787bba6bcf56eb7d6fd2a2431603d6539e21ff49fbd6dae446ce45641218cb6a&w=996'
        ];

        for ($i = 0; $i < 9; $i++) {
            // Ambil 3 gambar acak dari list
            $gambarUrls = collect($imageList)->shuffle()->take(3)->values()->toArray();

            Homestay::create([
                'nama' => 'Homestay ' . $faker->city,
                'deskripsi' => $faker->paragraph(3),
                'harga_sewa' => $faker->numberBetween(150000, 750000),
                'gambar' => json_encode($gambarUrls),
                'latitude' => $faker->latitude(-8.0, -6.0),
                'longitude' => $faker->longitude(106.0, 110.0),
            ]);
        }
    }
}
