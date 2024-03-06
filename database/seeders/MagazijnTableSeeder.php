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
        ['VerpakkingsEenheid' => 5, 'AantalAanwezig' => 453],
        ['VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 400],
        ['VerpakkingsEenheid' => 5, 'AantalAanwezig' => 1],
        ['VerpakkingsEenheid' => 1, 'AantalAanwezig' => 800],
        ['VerpakkingsEenheid' => 3, 'AantalAanwezig' => 234],
        ['VerpakkingsEenheid' => 2, 'AantalAanwezig' => 345],
        ['VerpakkingsEenheid' => 1, 'AantalAanwezig' => 795],
        ['VerpakkingsEenheid' => 10, 'AantalAanwezig' => 233],
        ['VerpakkingsEenheid' => 2.5, 'AantalAanwezig' => 123],
        ['VerpakkingsEenheid' => 3, 'AantalAanwezig' => null],
        ['VerpakkingsEenheid' => 2, 'AantalAanwezig' => 367],
        ['VerpakkingsEenheid' => 1, 'AantalAanwezig' => 467],
        ['VerpakkingsEenheid' => 5, 'AantalAanwezig' => 20],
    ]);
}
}
