<?php

use App\Shoes;
use Illuminate\Database\Seeder;

class ShoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shoes::create([
            'shoesCategory' => 'Running',
            'shoesPrice' => 120.99,
            'shoesQuantity' => '10',
            'shoesSize' => '9',
            'shoesColour' => 'Blue',
        ]);

        Shoes::create([
            'shoesCategory' => 'Basketball',
            'shoesPrice' => 140.99,
            'shoesQuantity' => '5',
            'shoesSize' => '11',
            'shoesColour' => 'Red',
        ]);

        Shoes::create([
            'shoesCategory' => 'Casual',
            'shoesPrice' => 80.99,
            'shoesQuantity' => '20',
            'shoesSize' => '8',
            'shoesColour' => 'Black',
        ]);
    }
}