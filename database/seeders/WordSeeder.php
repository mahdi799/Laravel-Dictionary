<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = [
            [
                'persian' => 'آب',
                'arabic' => 'ماء',
                'description' => 'نوشیدنی',
                'cat_name' => 'نوشیدنی',
             ],
             [
                'persian' => 'ماشین',
                'arabic' => 'سیاره',
                'description' => 'وسیله نقلیه',
                'cat_name' => 'اشیاء',
            ],
           
        ];

        DB::table('words')->insert($words);
    }
}
