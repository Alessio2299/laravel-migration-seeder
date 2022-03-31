<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = New Travel();
        $travel->name = 'Travel Amsterdam';
        $travel->image = 'https://www.holland.com/upload_mm/d/0/7/69550_fullimage_fietsen-amsterdam_1360x.jpg';
        $travel->description = "Amsterdam is the capital and largest city in the European country of the Netherlands. Amsterdam is famous for its canals and dikes. Unlike in capitals of most other countries, the national government, parliament, government ministries, supreme court, royal family and embassies are not in Amsterdam, but in The Hague.";
        $travel->place = 'Amsterdam';
        $travel->date = '11/09/2021 al 19/09/2021';
        $travel->price = 1950.00;
        $travel->available = 1;
        $travel->save();
     }
}
