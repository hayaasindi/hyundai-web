<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Kendaraan;

class KendaraanSeeder extends Seeder
{

public function run()
    {
        Kendaraan::create([
        'nama'=>'Hyundai Creta',
        'slug'=>'hyundai-creta',
        'kategori'=>'SUV',
        'harga'=>'Mulai Rp 350 Juta',
        'gambar'=>'creta.jpg',
        'badge'=>'Best Seller',
        'deskripsi'=>'SUV compact dengan desain sporty dan teknologi keamanan Hyundai SmartSense.',
        'transmisi'=>'Automatic',
        'seat'=>'5 Seat',
        'folder360'=>'creta'
        ]);

        Kendaraan::create([
        'nama'=>'Hyundai Palisade',
        'slug'=>'hyundai-palisade',
        'kategori'=>'SUV',
        'harga'=>'Mulai Rp 900 Juta',
        'gambar'=>'palisade.jpg',
        'badge'=>'Premium SUV',
        'deskripsi'=>'SUV premium dengan kabin luas dan kenyamanan kelas dunia.',
        'transmisi'=>'Automatic',
        'seat'=>'7 Seat',
        'folder360'=>'palisade'
        ]);

    }

}