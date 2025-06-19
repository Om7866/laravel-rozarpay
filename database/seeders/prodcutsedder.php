<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class prodcutsedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::create([
            "name" => "Visa 1 ",
            "pricer" => 7000
        ]);

        product::create([
            "name" => "Visa 2 ",
            "pricer" => 8000
        ]);

        product::create([
            "name" => "Visa 3 ",
            "pricer" => 9000
        ]);
    }
}
