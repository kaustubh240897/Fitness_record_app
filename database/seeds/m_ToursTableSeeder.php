<?php

use Illuminate\Database\Seeder;

class m_ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('m__tours')->delete();

    \DB::table('m__tours')->insert(array (

       0 => 
       array (
              'id' => 1,
              'tour_title' => '北陸３県をゆったり満喫コース',
              'tour_comment' => '富山・金沢・福井の新観光スポットから有名スポットまで網羅したコースです。',
              'm__collection_id' => '19',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),


       1 => 
       array (
              'id' => 2,
              'tour_title' => '京都・滋賀・三重歴史探訪コース',
              'tour_comment' => '京都府、滋賀県、三重県の有名観光地や戦国武将などの歴史を感じることができるコースです。',
              'm__collection_id' => '38',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       2 => 
       array (
              'id' => 3,
              'tour_title' => '南東北ぐるっと1周コース',
              'tour_comment' => '東北南部を大きく探訪するコースです。',
              'm__collection_id' => '63',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       3 => 
       array (
              'id' => 4,
              'tour_title' => '南九州パワースポットで癒しを得るコース',
              'tour_comment' => '南九州の大自然とパワースポットでの体感を楽しむコースです。',
              'm__collection_id' => '81',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       4 => 
       array (
              'id' => 5,
              'tour_title' => '北部九州横断フォトジェニックコース',
              'tour_comment' => '九州北部を横断し、今と昔の写真が撮りたくなる煤s目スポットを巡ります。',
              'm__collection_id' => '100',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       5 => 
       array (
              'id' => 6,
              'tour_title' => '関東の大自然満喫コース',
              'tour_comment' => '北関東一円に巡る雄大な大自然のパワーを感じるコースです。宮城・山形・福島の歴史と名物に触れる旅です。',
              'm__collection_id' => '122',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),


       6 => 
       array (
              'id' => 7,
              'tour_title' => '古き良き四国堪能コース',
              'tour_comment' => '四国4県の絶景と歴史あふれる街並みを楽しめるコースです。',
              'm__collection_id' => '140',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),



       7 => 
       array (
              'id' => 8,
              'tour_title' => '関東から日本海へ美しい日本を体験するコース',
              'tour_comment' => '東京から日本海の道程の中で、四季と風景の建築物の美しさとを感じることができるコースです。',
              'm__collection_id' => '162',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       8 => 
       array (
              'id' => 9,
              'tour_title' => '東海ご当地グルメとおなじみの観光コース',
              'tour_comment' => '東海地区のご当地グルメと定番観光地を巡るコースです。',
              'm__collection_id' => '186',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),



       9 => 
       array (
              'id' => 10,
              'tour_title' => '瀬戸内海おすすめ観光コース',
              'tour_comment' => '瀬戸内海に面した本州や四国のさまざまな観光地をめぐるコースです。',
              'm__collection_id' => '206',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       10 => 
       array (
              'id' => 11,
              'tour_title' => '北東北名物巡りコース',
              'tour_comment' => '北東北3県の伝統や名物などが盛りだくさんのコースです。',
              'm__collection_id' => '228',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       11 => 
       array (
              'id' => 12,
              'tour_title' => '山陰の魅力満載コース',
              'tour_comment' => '山陰地方のすばらしい景色とご当地のB級グルメを満喫するコースです。',
              'm__collection_id' => '246',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       12 => 
       array (
              'id' => 13,
              'tour_title' => '日本のルーツをさがすコース(関西)',
              'tour_comment' => '大阪府・和歌山県・奈良県・京都府の歴史や文化がたっぷり楽しめます。',
              'm__collection_id' => '265',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       13 => 
       array (
              'id' => 14,
              'tour_title' => '琉球文化にふれるコース',
              'tour_comment' => '沖縄県独自で発展してきた文化と、南国の大自然の美しさが感じられるコースです。',
              'm__collection_id' => '279',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),

       14 => 
       array (
              'id' => 15,
              'tour_title' => '魅惑の北海道満喫コース',
              'tour_comment' => '北の大地、北海道の魅力をたくさん詰め込んだコースです。',
              'm__collection_id' => '297',
              'tour_level' => '1',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
       ),
     
     
     

       ));
 }

}
