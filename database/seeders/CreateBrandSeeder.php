<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $brands = [
        'ASUS',
        'HP',
        'JAMUNA'
    ];


    public function run(): void
    {
        foreach ($this->brands as $brand){
            Brand::create([
                'name' => $brand,
            ]);
        }
    }
}
