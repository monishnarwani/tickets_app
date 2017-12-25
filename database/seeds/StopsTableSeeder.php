<?php

use App\Stop;
use Illuminate\Database\Seeder;

class StopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $stops = [
            [
                'name' => 'C1 Bus Stop',
                'camp_no' => '1'
            ],
            [
                'name' => 'Goal Maidan',
                'camp_no' => '1'
            ],
            [
                'name' => 'Nehru Chowk',
                'camp_no' => '2'
            ],
            [
                'name' => 'Siru Chowk',
                'camp_no' => '2'
            ],
            [
                'name' => 'Khemani',
                'camp_no' => '2'
            ],
            [
                'name' => 'Dera',
                'camp_no' => '3'
            ],
            [
                'name' => 'Radha Complex',
                'camp_no' => '3'
            ],

        ];

        foreach ($stops as $stop) {
            Stop::create($stop);
        }
    }
}
