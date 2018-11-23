<?php

use Illuminate\Database\Seeder;

class ToursdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_lists')->insert([
            [
                'id' => 1,
                'tours' => '白良浜温泉旅行ツアー',
                'day' => '2018年12月24日～2018年12月25日',
                'price' => 5000,
                'hotel' => '愉快リゾート 千畳店',
                'stocks' => 10,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 2,
                'tours' => '北海道海鮮食べ放題ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => 'ラビスタ函館ベイ',
                'stocks' => 9,
            ],
        ]);
    }
}
