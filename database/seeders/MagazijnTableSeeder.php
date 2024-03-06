<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagazijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('magazijn')->insert([
            ['id' => 1, 'Product_id' => 1, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 453],
            ['id' => 2, 'Product_id' => 2, 'VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 400],
            ['id' => 3, 'Product_id' => 3, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 1],
            ['id' => 4, 'Product_id' => 4, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 800],
            ['id' => 5, 'Product_id' => 5, 'VerpakkingsEenheid' => 3, 'AantalAanwezig' => 234],
            ['id' => 6, 'Product_id' => 6, 'VerpakkingsEenheid' => 2, 'AantalAanwezig' => 345],
            ['id' => 7, 'Product_id' => 7, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 795],
            ['id' => 8, 'Product_id' => 8, 'VerpakkingsEenheid' => 10, 'AantalAanwezig' => 233],
            ['id' => 9, 'Product_id' => 9, 'VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 123],
            ['id' => 10, 'Product_id' => 10, 'VerpakkingsEenheid' => 3, 'AantalAanwezig' => null],
            ['id' => 11, 'Product_id' => 11, 'VerpakkingsEenheid' => 2, 'AantalAanwezig' => 367],
            ['id' => 12, 'Product_id' => 12, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 467],
            ['id' => 13, 'Product_id' => 13, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 20],
        ]);
    }
}
