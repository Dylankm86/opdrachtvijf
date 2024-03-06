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
            ['id' => 1, 'ProductId' => 1, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 453],
            ['id' => 2, 'ProductId' => 2, 'VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 400],
            ['id' => 3, 'ProductId' => 3, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 1],
            ['id' => 4, 'ProductId' => 4, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 800],
            ['id' => 5, 'ProductId' => 5, 'VerpakkingsEenheid' => 3, 'AantalAanwezig' => 234],
            ['id' => 6, 'ProductId' => 6, 'VerpakkingsEenheid' => 2, 'AantalAanwezig' => 345],
            ['id' => 7, 'ProductId' => 7, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 795],
            ['id' => 8, 'ProductId' => 8, 'VerpakkingsEenheid' => 10, 'AantalAanwezig' => 233],
            ['id' => 9, 'ProductId' => 9, 'VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 123],
            ['id' => 10, 'ProductId' => 10, 'VerpakkingsEenheid' => 3, 'AantalAanwezig' => null],
            ['id' => 11, 'ProductId' => 11, 'VerpakkingsEenheid' => 2, 'AantalAanwezig' => 367],
            ['id' => 12, 'ProductId' => 12, 'VerpakkingsEenheid' => 1, 'AantalAanwezig' => 467],
            ['id' => 13, 'ProductId' => 13, 'VerpakkingsEenheid' => 5, 'AantalAanwezig' => 20],
        ]);
    }
}
