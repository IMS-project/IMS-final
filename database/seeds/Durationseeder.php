<?php

use Illuminate\Database\Seeder;
use App\Duration;
class Durationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $durations = [
            'First_quarter,October to january',
            'Second_quarter,February to June',
            'Third_quarter,July to September',
         ];
    
    
         foreach ($durations as $du) {
              Duration::create(['name' => $du]);
         }
    }
}
