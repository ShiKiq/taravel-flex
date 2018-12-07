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
                'prefectures' => 30,
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
                'prefectures' => 1,
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 3,
                'tours' => '青森温泉ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => '星野リゾート　青森屋',
                'stocks' => 9,
                'prefectures' => 2,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 4,
                'tours' => 'メトロポリタンツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => 'ホテルメトロポリタン盛岡ＮＥＷ　ＷＩＮＧ',
                'stocks' => 9,
                'prefectures' => 3,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 5,
                'tours' => '牛たんツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => '三井ガーデンホテル仙台',
                'stocks' => 9,
                'prefectures' => 4,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 6,
                'tours' => 'きりたんぽ鍋ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => '十和田ホテル',
                'stocks' => 9,
                'prefectures' => 5,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 7,
                'tours' => 'だだちゃ豆ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => 'ホテルルーセントタカミヤ',
                'stocks' => 9,
                'prefectures' => 6,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 8,
                'tours' => '馬肉料理ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => '八幡屋',
                'stocks' => 9,
                'prefectures' => 7,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 9,
                'tours' => '国営ひたち海浜公園ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 31000,
                'hotel' => '大洗ホテル',
                'stocks' => 9,
                'prefectures' => 8,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 10,
                'tours' => 'レモン牛乳ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21020,
                'hotel' => 'きぬ川ホテル三日月',
                'stocks' => 9,
                'prefectures' => 9,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 11,
                'tours' => '水沢うどんツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21200,
                'hotel' => '湯宿季の庭',
                'stocks' => 9,
                'prefectures' => 10,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 12,
                'tours' => 'ゼリーフライツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 11000,
                'hotel' => 'ナチュラルファームシティ農園ホテル',
                'stocks' => 9,
                'prefectures' => 11,
            ],
        ]);
//埼玉
        DB::table('tour_lists')->insert([
            [
                'id' => 13,
                'tours' => 'ゼリーフライツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => 'ナチュラルファームシティ農園ホテル',
                'stocks' => 9,
                'prefectures' => 12,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 14,
                'tours' => '東京スカイツリーツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '東京ドームホテル',
                'stocks' => 9,
                'prefectures' => 13,
            ],
        ]);

        DB::table('tour_lists')->insert([
            [
                'id' => 15,
                'tours' => 'カップヌードルミュージアムツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '強羅花壇',
                'stocks' => 9,
                'prefectures' => 14,
            ],
        ]);


        DB::table('tour_lists')->insert([
            [
                'id' => 16,
                'tours' => '雪面スレスレ　エアーボードツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '苗場プリンスホテル',
                'stocks' => 9,
                'prefectures' => 15,
            ],
        ]);


        DB::table('tour_lists')->insert([
            [
                'id' => 17,
                'tours' => '雪面スレスレ　エアーボードツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '苗場プリンスホテル',
                'stocks' => 9,
                'prefectures' => 16,
            ],
        ]);


        DB::table('tour_lists')->insert([
            [
                'id' => 18,
                'tours' => '富岩運河環水公園ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '富士屋',
                'stocks' => 9,
                'prefectures' => 17,
            ],
        ]);


        DB::table('tour_lists')->insert([
            [
                'id' => 19,
                'tours' => '富岩運河環水公園ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '富士屋',
                'stocks' => 9,
                'prefectures' => 18,
            ],
        ]);


        DB::table('tour_lists')->insert([
            [
                'id' => 20,
                'tours' => '月うさぎの里ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '温泉めい想倶楽部富士屋',
                'stocks' => 9,
                'prefectures' => 19,
            ],
        ]);


        DB::table('tour_lists')->insert([
            [
                'id' => 21,
                'tours' => '福井県立恐竜博物館ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 15200,
                'hotel' => '福井マンテンホテル駅前 ',
                'stocks' => 9,
                'prefectures' => 20,
            ],
        ]);

        



    }
}
