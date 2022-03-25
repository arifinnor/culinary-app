<?php

namespace Database\Seeders;

use App\Models\SubDistrict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subDistricts = [
            'Sidoarjo',
            'Balongbendo',
            'Buduran',
            'Candi',
            'Gedangan',
            'Jabon',
            'Krembung',
            'Krian',
            'Prambon',
            'Porong',
            'Sedati',
            'Sukodono',
            'Taman',
            'Tanggulangin',
            'Tarik',
            'Tulangan',
            'Waru',
            'Wonoayu',
        ];

        foreach ($subDistricts as $subDistrict) {
            SubDistrict::create([
                'name' => $subDistrict,
                'slug' => Str::slug($subDistrict)
            ]);
        }
    }
}
