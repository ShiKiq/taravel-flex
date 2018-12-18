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
                'img'=> 'wakayama.jpg'
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
                'img'=> 'hokkaido.jpg'
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
                'img'=> 'aomori'
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
                'img'=> 'iwate.jpg'
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
                'img'=> 'miyazaki.jpg'
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
                'img'=> 'akita.jpg'
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
                'img'=> 'yamagata.jpg'
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
                'img'=> 'fukushima'
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
                'img'=> 'ibaraki.jpg'
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
                'img'=> 'totigi.jpg'
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
                'img'=> 'gunma.jpg'
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
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
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 22,
                'tours' => 'ワイナリー見学ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 15200,
                'hotel' => 'ラビスタ富士河口湖',
                'stocks' => 9,
                'prefectures' => 21,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 23,
                'tours' => 'スタービレッジ阿智ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 18200,
                'hotel' => 'ホテル富貴の森',
                'stocks' => 9,
                'prefectures' => 22,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 24,
                'tours' => '世界遺産白川郷合掌造り',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 18200,
                'hotel' => '集落温泉ビジネスホテル富喜屋',
                'stocks' => 9,
                'prefectures' => 23,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 25,
                'tours' => '木負観光みかん園 みかん狩りCコース西浦みかん食べ放題ツアー！',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 18200,
                'hotel' => '天然温泉「さくやの湯」スーパーホテル富士宮',
                'stocks' => 9,
                'prefectures' => 24,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 26,
                'tours' => '名古屋港水族館ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19200,
                'hotel' => '第二富士ホテル',
                'stocks' => 9,
                'prefectures' => 25,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 27,
                'tours' => '志摩スペイン村ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19200,
                'hotel' => '料理旅館　富久潮',
                'stocks' => 9,
                'prefectures' => 26,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 28,
                'tours' => 'ツ近江八幡水郷巡ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19200,
                'hotel' => 'ベッセルイン滋賀守山駅前',
                'stocks' => 9,
                'prefectures' => 27,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 29,
                'tours' => '京都鉄道博物館ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19900,
                'hotel' => '旅館　富久家',
                'stocks' => 9,
                'prefectures' => 28,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 30,
                'tours' => 'ユニバーサル・スタジオ・ジャパンツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19900,
                'hotel' => 'ホテル京阪 ユニバーサル・タワー',
                'stocks' => 9,
                'prefectures' => 27,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 31,
                'tours' => '富士見屋ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19900,
                'hotel' => 'アパホテル〈姫路駅北〉',
                'stocks' => 9,
                'prefectures' => 30,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 32,
                'tours' => '奈良公園ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19900,
                'hotel' => 'カンデオホテルズ奈良橿原',
                'stocks' => 9,
                'prefectures' => 29,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 33,
                'tours' => 'アドベンチャーワールドツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 19900,
                'hotel' => '白浜古賀の井リゾート',
                'stocks' => 9,
                'prefectures' => 32,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 34,
                'tours' => '妖怪神社ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 17900,
                'hotel' => '皆生温泉　海色・湯の宿　松月',
                'stocks' => 9,
                'prefectures' => 33,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 35,
                'tours' => '松江城ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 17900,
                'hotel' => '皆生グランドホテル天水',
                'stocks' => 9,
                'prefectures' => 34,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 36,
                'tours' => '牛窓オリーブ園ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 15900,
                'hotel' => 'ホテルグランヴィア岡山',
                'stocks' => 9,
                'prefectures' => 35,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 37,
                'tours' => '三段峡、かき食べ歩きツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 25600,
                'hotel' => 'ホテルグランヴィア広島',
                'stocks' => 9,
                'prefectures' => 36,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 38,
                'tours' => 'プロの料理人が指導！ふく料理体験教室「天白コース」ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27500,
                'hotel' => '大谷山荘',
                'stocks' => 9,
                'prefectures' => 37,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 39,
                'tours' => '大塚国際美術館ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27400,
                'hotel' => 'ダイワロイネットホテル徳島駅前',
                'stocks' => 9,
                'prefectures' => 38,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 40,
                'tours' => '姫路城と岡山・こんぴら温泉・瀬戸内ドライブツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27500,
                'hotel' => 'オークラホテル高松',
                'stocks' => 9,
                'prefectures' => 39,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 41,
                'tours' => '愛媛県を巡ろう　レンタカー付ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => '道後 やや',
                'stocks' => 9,
                'prefectures' => 40,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 42,
                'tours' => '「ひろめ市場」で土佐名物を堪能しようツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => 'ザ クラウンパレス新阪急高知',
                'stocks' => 9,
                'prefectures' => 41,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 43,
                'tours' => '「ゆふいんの森号」で行く　港町博多と由布院温泉ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => 'サットンホテル博多シティ',
                'stocks' => 9,
                'prefectures' => 42,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 44,
                'tours' => '「ひろめ市場」で土佐名物を堪能しようツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => 'ザ クラウンパレス新阪急高知',
                'stocks' => 9,
                'prefectures' => 43,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 45,
                'tours' => '嬉野温泉ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => 'コンフォートホテル佐賀',
                'stocks' => 9,
                'prefectures' => 44,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 46,
                'tours' => '中国伝統芸能貸切観賞　長崎＆ハウステンボスツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => 'ホテルニュータンダ',
                'stocks' => 9,
                'prefectures' => 45,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 47,
                'tours' => '中国伝統芸能貸切観賞　長崎＆ハウステンボスツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => 'ホテルニュータンダ',
                'stocks' => 9,
                'prefectures' => 46,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 48,
                'tours' => '国立公園の中に泊まる　黒川温泉郷・三愛高原ホテルツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => '三愛高原ホテル',
                'stocks' => 9,
                'prefectures' => 47,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 49,
                'tours' => '国立公園の中に泊まる　黒川温泉郷・三愛高原ホテルツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 27300,
                'hotel' => '三愛高原ホテル',
                'stocks' => 9,
                'prefectures' => 48,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 50,
                'tours' => '「ゆふいんの森号」で行く　港町博多と由布院温泉ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 24300,
                'hotel' => 'サットンホテル博多シティ',
                'stocks' => 9,
                'prefectures' => 49,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 51,
                'tours' => '由布院温泉と神話の舞台・高千穂に泊まるツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 24300,
                'hotel' => 'ホテル四季見',
                'stocks' => 9,
                'prefectures' => 50,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 52,
                'tours' => '南国「いぶすきの菜の花」を満喫　鹿児島・指宿温泉ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 24300,
                'hotel' => 'ホテル・レクストン鹿児島',
                'stocks' => 9,
                'prefectures' => 51,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 53,
                'tours' => '沖縄美ら海水族館ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 24300,
                'hotel' => 'ホテルモントレ沖縄スパ＆リゾート',
                'stocks' => 9,
                'prefectures' => 52,
                'img'=> ''
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 54,
                'tours' => '北海道海鮮食べ放題ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => '洞爺湖旅館',
                'stocks' => 9,
                'prefectures' => 1,
                'img'=> 'hokkaido.jpg'
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 55,
                'tours' => '北海道海鮮食べ放題ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => 'ラビスタ函館ベイ',
                'stocks' => 9,
                'prefectures' => 1,
                'img'=> 'hokkaido.jpg'
            ],
        ]);
        DB::table('tour_lists')->insert([
            [
                'id' => 56,
                'tours' => '北海道海鮮食べ放題ツアー',
                'day' => '2018年12月27日～2018年12月28日',
                'price' => 21000,
                'hotel' => 'ラビスタ函館ベイ',
                'stocks' => 9,
                'prefectures' => 1,
                'img'=> 'hokkaido.jpg'
            ],
        ]);
    }
}