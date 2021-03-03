<?php

use Illuminate\Database\Seeder;

class m_CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('m__collections')->delete();

    \DB::table('m__collections')->insert(array (
        0 => 
          array (
                 'id' => 1,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '黒部ダム放水時',
                 'path' => 'storage/tour1 collection1/',
                 'filename' => 'P01-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          1 => 
          array (
                 'id' => 2,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'トロッコ列車',
                 'path' => 'storage/tour1 collection2/',
                 'filename' => 'P01-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          2 => 
          array (
                 'id' => 3,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海の上に蜃気楼が出ている様子',
                 'path' => 'storage/tour1 collection3/',
                 'filename' => 'P01-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          3 => 
          array (
                 'id' => 4,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ます寿司',
                 'path' => 'storage/tour1 collection4/',
                 'filename' => 'P01-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          4 => 
          array (
                 'id' => 5,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '寒ブリ(お刺身切り身と1本まるまる)',
                 'path' => 'storage/tour1 collection5/',
                 'filename' => 'P01-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          5 => 
          array (
                 'id' => 6,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海が見える露天風呂とシラサギが浸かっている',
                 'path' => 'storage/tour1 collection6/',
                 'filename' => 'P01-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          6 => 
          array (
                 'id' => 7,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '長いベンチがメインでさくら貝も',
                 'path' => 'storage/tour1 collection7/',
                 'filename' => 'P01-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          7 => 
          array (
                 'id' => 8,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '輪島塗のお椀',
                 'path' => 'storage/tour1 collection8/',
                 'filename' => 'P01-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          8 => 
          array (
                 'id' => 9,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海と海岸線の斜面に小さい田んぼがいくつも並んでいるように。田んぼには緑の稲穂',
                 'path' => 'storage/tour1 collection9/',
                 'filename' => 'P01-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          9 => 
          array (
                 'id' => 10,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '笠をかぶる修行僧',
                 'path' => 'storage/tour1 collection10/',
                 'filename' => 'P01-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          10 => 
          array (
                 'id' => 11,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '断崖で映画の撮影をしている絵',
                 'path' => 'storage/tour1 collection11/',
                 'filename' => 'P01-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          11 => 
          array (
                 'id' => 12,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '砂浜の海岸線を走る車',
                 'path' => 'storage/tour1 collection12/',
                 'filename' => 'P01-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          12 => 
          array (
                 'id' => 13,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '灯篭と霞ヶ池。一番有名な景色',
                 'path' => 'storage/tour1 collection13/',
                 'filename' => 'P01-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          13 => 
          array (
                 'id' => 14,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '九谷焼きのお皿など',
                 'path' => 'storage/tour1 collection14/',
                 'filename' => 'P01-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          14 => 
          array (
                 'id' => 15,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '白山の山並みと温泉',
                 'path' => 'storage/tour1 collection15/',
                 'filename' => 'P01-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          15 => 
          array (
                 'id' => 16,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '恐竜',
                 'path' => 'storage/tour1 collection16/',
                 'filename' => 'P01-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          16 => 
          array (
                 'id' => 17,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '永平寺外観と修行僧',
                 'path' => 'storage/tour1 collection17/',
                 'filename' => 'P01-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        

          17 => 
          array (
                 'id' => 18,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '東尋坊の崖',
                 'path' => 'storage/tour1 collection18/',
                 'filename' => 'P01-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        


          18 => 
          array (
                 'id' => 19,
                 'collection_category' => 'tour',
                 'collection_title' => '恐竜とカニとぶり(手つないでる？遊んでる？仲良くしている？)周りは金箔、もしくは金箔を使ったパックするところ？金箔アイス食べるなど可愛く。',
                 'path' => 'storage/tour1/',
                 'filename' => 'C01-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          19 => 
          array (
                 'id' => 20,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '天橋立ビューランドから見る天橋立',
                 'path' => 'storage/tour2 collection1/',
                 'filename' => 'P02-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          20 => 
          array (
                 'id' => 21,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '天岩戸神社　本殿',
                 'path' => 'storage/tour2 collection2/',
                 'filename' => 'P02-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          21 => 
          array (
                 'id' => 22,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '福知山城と明智光秀',
                 'path' => 'storage/tour2 collection3/',
                 'filename' => 'P02-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          22 => 
          array (
                 'id' => 23,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '琴滝',
                 'path' => 'storage/tour2 collection4/',
                 'filename' => 'P02-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          23 => 
          array (
                 'id' => 24,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'イノシシとウリ坊ファミリーに牡丹の花を飾る感じ',
                 'path' => 'storage/tour2 collection5/',
                 'filename' => 'P02-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          24 => 
          array (
                 'id' => 25,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '紅葉の曹源池庭園(着物姿の女性が庭園を見てる姿を入れて欲しい)',
                 'path' => 'storage/tour2 collection6/',
                 'filename' => 'P02-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          25 => 
          array (
                 'id' => 26,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '千本鳥居と鳥居とくぐる着物姿の女性',
                 'path' => 'storage/tour2 collection7/',
                 'filename' => 'P02-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          26 => 
          array (
                 'id' => 27,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '東塔',
                 'path' => 'storage/tour2 collection8/',
                 'filename' => 'P02-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          27 => 
          array (
                 'id' => 28,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '湖畔からみる琵琶湖大橋',
                 'path' => 'storage/tour2 collection9/',
                 'filename' => 'P02-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          28 => 
          array (
                 'id' => 29,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '八幡堀と舟',
                 'path' => 'storage/tour2 collection10/',
                 'filename' => 'P02-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          29 => 
          array (
                 'id' => 30,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '彦根城天守',
                 'path' => 'storage/tour2 collection11/',
                 'filename' => 'P02-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          30 => 
          array (
                 'id' => 31,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '安土城石垣と織田信長',
                 'path' => 'storage/tour2 collection12/',
                 'filename' => 'P02-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          31 => 
          array (
                 'id' => 32,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '狸の置物',
                 'path' => 'storage/tour2 collection13/',
                 'filename' => 'P02-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          32 => 
          array (
                 'id' => 33,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '忍者',
                 'path' => 'storage/tour2 collection14/',
                 'filename' => 'P02-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          33 => 
          array (
                 'id' => 34,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '高原に立つ風車',
                 'path' => 'storage/tour2 collection15/',
                 'filename' => 'P02-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          34 => 
          array (
                 'id' => 35,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '長屋が連なる様子',
                 'path' => 'storage/tour2 collection16/',
                 'filename' => 'P02-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          35 => 
          array (
                 'id' => 36,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '橋の手前にかかる鳥居(内宮　宇治橋)',
                 'path' => 'storage/tour2 collection17/',
                 'filename' => 'P02-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          36 => 
          array (
                 'id' => 37,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '横山展望台からの英虞湾',
                 'path' => 'storage/tour2 collection18/',
                 'filename' => 'P02-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          37 => 
          array (
                 'id' => 38,
                 'collection_category' => 'tour',
                 'collection_title' => '',
                 'path' => 'storage/tour2/',
                 'filename' => 'C02-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          38 => 
          array (
                 'id' => 39,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '松島湾と遊覧船',
                 'path' => 'storage/tour3 collection1/',
                 'filename' => 'P03-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          39 => 
          array (
                 'id' => 40,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大きな笹飾り',
                 'path' => 'storage/tour3 collection2/',
                 'filename' => 'P03-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          40 => 
          array (
                 'id' => 41,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '滝壺からの滝',
                 'path' => 'storage/tour3 collection3/',
                 'filename' => 'P03-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          41 => 
          array (
                 'id' => 42,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '牛タン',
                 'path' => 'storage/tour3 collection4/',
                 'filename' => 'P03-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          42 => 
          array (
                 'id' => 43,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ひまわり畑',
                 'path' => 'storage/tour3 collection5/',
                 'filename' => 'P03-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          43 => 
          array (
                 'id' => 44,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '紅葉と鳴子峡に架かる橋',
                 'path' => 'storage/tour3 collection6/',
                 'filename' => 'P03-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          44 => 
          array (
                 'id' => 45,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '遠くからみた見るとトトロに見えるとのことで多めで見た絵',
                 'path' => 'storage/tour3 collection7/',
                 'filename' => 'P03-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          45 => 
          array (
                 'id' => 46,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ケヤキ並木と白壁の倉庫が並んでるところ(夏の緑のケヤキが良いです)',
                 'path' => 'storage/tour3 collection8/',
                 'filename' => 'P03-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          46 => 
          array (
                 'id' => 47,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'だだちゃ豆と小さくビール',
                 'path' => 'storage/tour3 collection9/',
                 'filename' => 'P03-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          47 => 
          array (
                 'id' => 48,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '国宝の羽黒山の五重塔',
                 'path' => 'storage/tour3 collection10/',
                 'filename' => 'P03-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          48 => 
          array (
                 'id' => 49,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '最上川の舟下り',
                 'path' => 'storage/tour3 collection11/',
                 'filename' => 'P03-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          49 => 
          array (
                 'id' => 50,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '雪景色の銀山温泉(一番有名な橋を中心に旅館が並ぶ絵)',
                 'path' => 'storage/tour3 collection12/',
                 'filename' => 'P03-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          50 => 
          array (
                 'id' => 51,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '一番上の開山堂と遠目から見たところ',
                 'path' => 'storage/tour3 collection13/',
                 'filename' => 'P03-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          51 => 
          array (
                 'id' => 52,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '樹氷群',
                 'path' => 'storage/tour3 collection14/',
                 'filename' => 'P03-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          52 => 
          array (
                 'id' => 53,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ステーキ',
                 'path' => 'storage/tour3 collection15/',
                 'filename' => 'P03-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          53 => 
          array (
                 'id' => 54,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '真っ青な湖面の青沼',
                 'path' => 'storage/tour3 collection16/',
                 'filename' => 'P03-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          54 => 
          array (
                 'id' => 55,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鶴ヶ城と小さく白虎隊',
                 'path' => 'storage/tour3 collection17/',
                 'filename' => 'P03-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          55 => 
          array (
                 'id' => 56,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大内宿全体',
                 'path' => 'storage/tour3 collection18/',
                 'filename' => 'P03-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          56 => 
          array (
                 'id' => 57,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '猪苗代湖と野口英世',
                 'path' => 'storage/tour3 collection19/',
                 'filename' => 'P03-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          57 => 
          array (
                 'id' => 58,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '三春滝桜',
                 'path' => 'storage/tour3 collection20/',
                 'filename' => 'P03-20.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          58 => 
          array (
                 'id' => 59,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '洞窟内の滝根御殿(洞窟内にイルミネーションでカラフルになっています)',
                 'path' => 'storage/tour3 collection21/',
                 'filename' => 'P03-21.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          59 => 
          array (
                 'id' => 60,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '甲冑を着た人が馬にまたがって走るところ(複数人)',
                 'path' => 'storage/tour3 collection22/',
                 'filename' => 'P03-22.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          60 => 
          array (
                 'id' => 61,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '桃',
                 'path' => 'storage/tour3 collection23/',
                 'filename' => 'P03-23.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          61 => 
          array (
                 'id' => 62,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '御釜',
                 'path' => 'storage/tour3 collection24/',
                 'filename' => 'P03-24.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          62 => 
          array (
                 'id' => 63,
                 'collection_category' => 'tour',
                 'collection_title' => '枝豆とステーキを食べる野口英世と背景に七夕祭り',
                 'path' => 'storage/tour3/',
                 'filename' => 'C03-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          63 => 
          array (
                 'id' => 64,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '船上からのイルカウォッチング',
                 'path' => 'storage/tour4 collection1/',
                 'filename' => 'P04-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          64 => 
          array (
                 'id' => 65,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '夕日に照らされる干潟(曲線が多数出ている絵)',
                 'path' => 'storage/tour4 collection2/',
                 'filename' => 'P04-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          65 => 
          array (
                 'id' => 66,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '熊本城',
                 'path' => 'storage/tour4 collection3/',
                 'filename' => 'P04-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          66 => 
          array (
                 'id' => 67,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '阿蘇中岳火口',
                 'path' => 'storage/tour4 collection4/',
                 'filename' => 'P04-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          67 => 
          array (
                 'id' => 68,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '橋の上からみる滝と渓谷。水面はボートが数隻',
                 'path' => 'storage/tour4 collection5/',
                 'filename' => 'P04-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          68 => 
          array (
                 'id' => 69,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '展望台から見えるクルスの海',
                 'path' => 'storage/tour4 collection6/',
                 'filename' => 'P04-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          69 => 
          array (
                 'id' => 70,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '円形の古墳を上から見た絵',
                 'path' => 'storage/tour4 collection7/',
                 'filename' => 'P04-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          70 => 
          array (
                 'id' => 71,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '波状岩と砂浜に立つ赤い鳥居',
                 'path' => 'storage/tour4 collection8/',
                 'filename' => 'P04-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          71 => 
          array (
                 'id' => 72,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '階段上からの絵(朱色の手すりと青い海と岩)',
                 'path' => 'storage/tour4 collection9/',
                 'filename' => 'P04-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          72 => 
          array (
                 'id' => 73,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海を背景に草原でくさを食べる馬',
                 'path' => 'storage/tour4 collection10/',
                 'filename' => 'P04-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          73 => 
          array (
                 'id' => 74,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海に白いタンクが並んでいる',
                 'path' => 'storage/tour4 collection11/',
                 'filename' => 'P04-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          74 => 
          array (
                 'id' => 75,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '白い煙をあげる桜島',
                 'path' => 'storage/tour4 collection12/',
                 'filename' => 'P04-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          75 => 
          array (
                 'id' => 76,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '黒い黒酢の龜が並んでいる',
                 'path' => 'storage/tour4 collection13/',
                 'filename' => 'P04-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          76 => 
          array (
                 'id' => 77,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '西郷隆盛の像',
                 'path' => 'storage/tour4 collection14/',
                 'filename' => 'P04-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          77 => 
          array (
                 'id' => 78,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '武家屋敷通りのの石垣の間を歩いている',
                 'path' => 'storage/tour4 collection15/',
                 'filename' => 'P04-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          78 => 
          array (
                 'id' => 79,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海岸で砂むし風呂にはいる姿',
                 'path' => 'storage/tour4 collection16/',
                 'filename' => 'P04-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          79 => 
          array (
                 'id' => 80,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '赤と白の本堂と乙姫と浦島',
                 'path' => 'storage/tour4 collection17/',
                 'filename' => 'P04-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          80 => 
          array (
                 'id' => 81,
                 'collection_category' => 'tour',
                 'collection_title' => '南国の植物(ヤシの木など)とイルカ、浦島太郎をうまく合わせていただけると助かります！',
                 'path' => 'storage/tour4/',
                 'filename' => 'C04-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          81 => 
          array (
                 'id' => 82,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '別府湾と温泉、高崎山',
                 'path' => 'storage/tour5 collection1/',
                 'filename' => 'P05-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          82 => 
          array (
                 'id' => 83,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ブドウの樹とワイン樽',
                 'path' => 'storage/tour5 collection2/',
                 'filename' => 'P05-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          83 => 
          array (
                 'id' => 84,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '福沢諭吉がから揚げを食べる',
                 'path' => 'storage/tour5 collection3/',
                 'filename' => 'P05-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          84 => 
          array (
                 'id' => 85,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'カルスト台地(石灰岩の山)',
                 'path' => 'storage/tour5 collection4/',
                 'filename' => 'P05-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          85 => 
          array (
                 'id' => 86,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '古い街並み＋関門橋',
                 'path' => 'storage/tour5 collection5/',
                 'filename' => 'P05-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          86 => 
          array (
                 'id' => 87,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '卑弥呼と金印',
                 'path' => 'storage/tour5 collection6/',
                 'filename' => 'P05-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          87 => 
          array (
                 'id' => 88,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '屋台',
                 'path' => 'storage/tour5 collection7/',
                 'filename' => 'P05-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          88 => 
          array (
                 'id' => 89,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '受験生とお参り',
                 'path' => 'storage/tour5 collection8/',
                 'filename' => 'P05-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          89 => 
          array (
                 'id' => 90,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '柳川下り(柳の木と白壁の古い建物バックに舟に乗る姿)',
                 'path' => 'storage/tour5 collection9/',
                 'filename' => 'P05-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          90 => 
          array (
                 'id' => 91,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '高床式倉庫？遺跡であるような家屋',
                 'path' => 'storage/tour5 collection10/',
                 'filename' => 'P05-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          91 => 
          array (
                 'id' => 92,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'たくさんのカラフルな熱気球が飛ぶところ',
                 'path' => 'storage/tour5 collection11/',
                 'filename' => 'P05-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          92 => 
          array (
                 'id' => 93,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'イカの活造り',
                 'path' => 'storage/tour5 collection12/',
                 'filename' => 'P05-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          93 => 
          array (
                 'id' => 94,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '佐世保バーガー',
                 'path' => 'storage/tour5 collection13/',
                 'filename' => 'P05-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          94 => 
          array (
                 'id' => 95,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '橋の上から見る渦潮',
                 'path' => 'storage/tour5 collection14/',
                 'filename' => 'P05-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          95 => 
          array (
                 'id' => 96,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '夜景',
                 'path' => 'storage/tour5 collection15/',
                 'filename' => 'P05-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          96 => 
          array (
                 'id' => 97,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海の上を飛行機が離陸するところ',
                 'path' => 'storage/tour5 collection16/',
                 'filename' => 'P05-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          97 => 
          array (
                 'id' => 98,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'バックが海で開けているメロンの建物とバス停',
                 'path' => 'storage/tour5 collection17/',
                 'filename' => 'P05-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          98 => 
          array (
                 'id' => 99,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '活火山+温泉',
                 'path' => 'storage/tour5 collection18/',
                 'filename' => 'P05-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          99 => 
          array (
                 'id' => 100,
                 'collection_category' => 'tour',
                 'collection_title' => 'バルーン(諭吉と卑弥呼が乗る)',
                 'path' => 'storage/tour5/',
                 'filename' => 'C05-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          100 => 
          array (
                 'id' => 101,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '地獄のぞきをしている人',
                 'path' => 'storage/tour6 collection1/',
                 'filename' => 'P06-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          101 => 
          array (
                 'id' => 102,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '洞窟を真正面から見た絵(新緑の中)',
                 'path' => 'storage/tour6 collection2/',
                 'filename' => 'P06-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          102 => 
          array (
                 'id' => 103,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鳥居のバックに星空',
                 'path' => 'storage/tour6 collection3/',
                 'filename' => 'P06-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          103 => 
          array (
                 'id' => 104,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '落花生',
                 'path' => 'storage/tour6 collection4/',
                 'filename' => 'P06-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          104 => 
          array (
                 'id' => 105,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '本堂とその横の三重塔',
                 'path' => 'storage/tour6 collection5/',
                 'filename' => 'P06-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          105 => 
          array (
                 'id' => 106,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鹿島神宮のシンボルの楼門',
                 'path' => 'storage/tour6 collection6/',
                 'filename' => 'P06-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          106 => 
          array (
                 'id' => 107,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '牛久大仏',
                 'path' => 'storage/tour6 collection7/',
                 'filename' => 'P06-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          107 => 
          array (
                 'id' => 108,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '帆引き船',
                 'path' => 'storage/tour6 collection8/',
                 'filename' => 'P06-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          108 => 
          array (
                 'id' => 109,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '梅が咲き誇るところ',
                 'path' => 'storage/tour6 collection9/',
                 'filename' => 'P06-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          109 => 
          array (
                 'id' => 110,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '遠くから見る竜神大吊橋',
                 'path' => 'storage/tour6 collection10/',
                 'filename' => 'P06-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          110 => 
          array (
                 'id' => 111,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '一番下から見た迫力がある滝',
                 'path' => 'storage/tour6 collection11/',
                 'filename' => 'P06-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          111 => 
          array (
                 'id' => 112,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大自然で乗馬をしているところ',
                 'path' => 'storage/tour6 collection12/',
                 'filename' => 'P06-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          112 => 
          array (
                 'id' => 113,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鬼怒川渓谷を挟んで温泉ホテルが立ち並ぶ',
                 'path' => 'storage/tour6 collection13/',
                 'filename' => 'P06-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          113 => 
          array (
                 'id' => 114,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '見猿聞か猿言わ猿',
                 'path' => 'storage/tour6 collection14/',
                 'filename' => 'P06-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          114 => 
          array (
                 'id' => 115,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '尾瀬の木道を歩くところ',
                 'path' => 'storage/tour6 collection15/',
                 'filename' => 'P06-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          115 => 
          array (
                 'id' => 116,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '岩の割れ目に落ちる滝',
                 'path' => 'storage/tour6 collection16/',
                 'filename' => 'P06-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          116 => 
          array (
                 'id' => 117,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '伊香保温泉の石段',
                 'path' => 'storage/tour6 collection17/',
                 'filename' => 'P06-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          117 => 
          array (
                 'id' => 118,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '赤レンガの製糸場',
                 'path' => 'storage/tour6 collection18/',
                 'filename' => 'P06-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          118 => 
          array (
                 'id' => 119,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '石畳戸川で遊ぶ子供',
                 'path' => 'storage/tour6 collection19/',
                 'filename' => 'P06-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          119 => 
          array (
                 'id' => 120,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '国宝の本殿',
                 'path' => 'storage/tour6 collection20/',
                 'filename' => 'P06-20.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          120 => 
          array (
                 'id' => 121,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '時の鐘と町並み',
                 'path' => 'storage/tour6 collection21/',
                 'filename' => 'P06-21.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          121 => 
          array (
                 'id' => 122,
                 'collection_category' => 'tour',
                 'collection_title' => 'トレッキングする人と見猿聞か猿言わ猿をするサル',
                 'path' => 'storage/tour6/',
                 'filename' => 'C06-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          122 => 
          array (
                 'id' => 123,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '渦潮',
                 'path' => 'storage/tour7 collection1/',
                 'filename' => 'P07-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          123 => 
          array (
                 'id' => 124,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '阿波踊り',
                 'path' => 'storage/tour7 collection2/',
                 'filename' => 'P07-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          124 => 
          array (
                 'id' => 125,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '表通りの建物が並ぶところ',
                 'path' => 'storage/tour7 collection3/',
                 'filename' => 'P07-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          125 => 
          array (
                 'id' => 126,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '飛来峰からの眺望(橋)',
                 'path' => 'storage/tour7 collection4/',
                 'filename' => 'P07-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          126 => 
          array (
                 'id' => 127,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '瀬戸大橋',
                 'path' => 'storage/tour7 collection5/',
                 'filename' => 'P07-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          127 => 
          array (
                 'id' => 128,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'たくさん天ぷらが乗ったうどん(讃岐うどん)',
                 'path' => 'storage/tour7 collection6/',
                 'filename' => 'P07-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          128 => 
          array (
                 'id' => 129,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大歩危の渓谷(新緑が良いです)',
                 'path' => 'storage/tour7 collection7/',
                 'filename' => 'P07-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          129 => 
          array (
                 'id' => 130,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大杉の前でお祈りしている人',
                 'path' => 'storage/tour7 collection8/',
                 'filename' => 'P07-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          130 => 
          array (
                 'id' => 131,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '桂浜(奥に龍王岬が見える一番有名な角度から)',
                 'path' => 'storage/tour7 collection9/',
                 'filename' => 'P07-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          131 => 
          array (
                 'id' => 132,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ブルーの滝壺',
                 'path' => 'storage/tour7 collection10/',
                 'filename' => 'P07-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          132 => 
          array (
                 'id' => 133,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '石槌山の天狗岳',
                 'path' => 'storage/tour7 collection11/',
                 'filename' => 'P07-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          133 => 
          array (
                 'id' => 134,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '橋の上をサイクリングをする人',
                 'path' => 'storage/tour7 collection12/',
                 'filename' => 'P07-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          134 => 
          array (
                 'id' => 135,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '道後温泉本館',
                 'path' => 'storage/tour7 collection13/',
                 'filename' => 'P07-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          135 => 
          array (
                 'id' => 136,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'みかん畑',
                 'path' => 'storage/tour7 collection14/',
                 'filename' => 'P07-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          136 => 
          array (
                 'id' => 137,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '遠くから見た大洲城(電車の陸橋の奥に大洲城',
                 'path' => 'storage/tour7 collection15/',
                 'filename' => 'P07-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          137 => 
          array (
                 'id' => 138,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '宇和島鯛めし',
                 'path' => 'storage/tour7 collection16/',
                 'filename' => 'P07-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          138 => 
          array (
                 'id' => 139,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '沈下橋とこどもたち(飛び込みしてるところではなく、座っていたり、虫取りみたいなことをしているところ)',
                 'path' => 'storage/tour7 collection17/',
                 'filename' => 'P07-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          139 => 
          array (
                 'id' => 140,
                 'collection_category' => 'tour',
                 'collection_title' => '龍馬と漱石がパラグライダーで絶景見てるところ(高知はパラグライダーなどのアクティビティが有名なので)二人が難しい場合は瀬戸内海の海辺の絵(みかん、島々が見える、橋など)',
                 'path' => 'storage/tour7/',
                 'filename' => 'C07-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          140 => 
          array (
                 'id' => 141,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '雷門',
                 'path' => 'storage/tour8 collection1/',
                 'filename' => 'P08-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          141 => 
          array (
                 'id' => 142,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鳥居をくぐった参道の自然あふれるところに外人含め人が行き来するところ',
                 'path' => 'storage/tour8 collection2/',
                 'filename' => 'P08-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          142 => 
          array (
                 'id' => 143,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'あひるボートと桜並木',
                 'path' => 'storage/tour8 collection3/',
                 'filename' => 'P08-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          143 => 
          array (
                 'id' => 144,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '天狗',
                 'path' => 'storage/tour8 collection4/',
                 'filename' => 'P08-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          144 => 
          array (
                 'id' => 145,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '猿橋(四層はねぎが見える角度)と渡る猿',
                 'path' => 'storage/tour8 collection5/',
                 'filename' => 'P08-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          145 => 
          array (
                 'id' => 146,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '河口湖から見る富士山と逆さ富士',
                 'path' => 'storage/tour8 collection6/',
                 'filename' => 'P08-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          146 => 
          array (
                 'id' => 147,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '武田神社の赤い橋と奥に鳥居+武田信玄',
                 'path' => 'storage/tour8 collection7/',
                 'filename' => 'P08-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          147 => 
          array (
                 'id' => 148,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '乗馬',
                 'path' => 'storage/tour8 collection8/',
                 'filename' => 'P08-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          148 => 
          array (
                 'id' => 149,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '立石公園から見る諏訪湖',
                 'path' => 'storage/tour8 collection9/',
                 'filename' => 'P08-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          149 => 
          array (
                 'id' => 150,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '松本城のバックにアルプスの山',
                 'path' => 'storage/tour8 collection10/',
                 'filename' => 'P08-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          150 => 
          array (
                 'id' => 151,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '松茸と温泉',
                 'path' => 'storage/tour8 collection11/',
                 'filename' => 'P08-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          151 => 
          array (
                 'id' => 152,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '桜とお城と真田の家紋の家紋',
                 'path' => 'storage/tour8 collection12/',
                 'filename' => 'P08-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          152 => 
          array (
                 'id' => 153,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '本堂と常香炉(煙をあびるやつ)から煙がでている',
                 'path' => 'storage/tour8 collection13/',
                 'filename' => 'P08-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          153 => 
          array (
                 'id' => 154,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '雪景色の中温泉に入るたくさんのサル',
                 'path' => 'storage/tour8 collection14/',
                 'filename' => 'P08-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          154 => 
          array (
                 'id' => 155,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '野沢温泉シンボル？「大湯」とスキーヤー(ウエア着てる人)',
                 'path' => 'storage/tour8 collection15/',
                 'filename' => 'P08-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          155 => 
          array (
                 'id' => 156,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'パノラマステーションからの景色',
                 'path' => 'storage/tour8 collection16/',
                 'filename' => 'P08-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          156 => 
          array (
                 'id' => 157,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大きい花火が複数打ち上がるところ',
                 'path' => 'storage/tour8 collection17/',
                 'filename' => 'P08-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          157 => 
          array (
                 'id' => 158,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '本殿と弥彦山',
                 'path' => 'storage/tour8 collection18/',
                 'filename' => 'P08-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          158 => 
          array (
                 'id' => 159,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '白鳥が泳ぐ姿',
                 'path' => 'storage/tour8 collection19/',
                 'filename' => 'P08-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          159 => 
          array (
                 'id' => 160,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '足軽長屋(足軽の人も)',
                 'path' => 'storage/tour8 collection20/',
                 'filename' => 'P08-20.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          160 => 
          array (
                 'id' => 161,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '露天風呂から見る夕日',
                 'path' => 'storage/tour8 collection21/',
                 'filename' => 'P08-21.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          161 => 
          array (
                 'id' => 162,
                 'collection_category' => 'tour',
                 'collection_title' => '富士山と雷門と夕日(ｔｈｅ日本というイメージで・・・)',
                 'path' => 'storage/tour8/',
                 'filename' => 'C08-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          162 => 
          array (
                 'id' => 163,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection1',
                 'path' => 'storage/tour10 collection1/',
                 'filename' => 'P10-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          163 => 
          array (
                 'id' => 164,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection2',
                 'path' => 'storage/tour10 collection2/',
                 'filename' => 'P10-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          164 => 
          array (
                 'id' => 165,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection3',
                 'path' => 'storage/tour10 collection3/',
                 'filename' => 'P10-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          165 => 
          array (
                 'id' => 166,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection4',
                 'path' => 'storage/tour10 collection4/',
                 'filename' => 'P10-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          166 => 
          array (
                 'id' => 167,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection5',
                 'path' => 'storage/tour10 collection5/',
                 'filename' => 'P10-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          167 => 
          array (
                 'id' => 168,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection6',
                 'path' => 'storage/tour10 collection6/',
                 'filename' => 'P10-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          168 => 
          array (
                 'id' => 169,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection7',
                 'path' => 'storage/tour10 collection7/',
                 'filename' => 'P10-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          169 => 
          array (
                 'id' => 170,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection8',
                 'path' => 'storage/tour10 collection8/',
                 'filename' => 'P10-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          170 => 
          array (
                 'id' => 171,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection9',
                 'path' => 'storage/tour10 collection9/',
                 'filename' => 'P10-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          171 => 
          array (
                 'id' => 172,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection10',
                 'path' => 'storage/tour10 collection10/',
                 'filename' => 'P10-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          172 => 
          array (
                 'id' => 173,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection11',
                 'path' => 'storage/tour10 collection11/',
                 'filename' => 'P10-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          173 => 
          array (
                 'id' => 174,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection12',
                 'path' => 'storage/tour10 collection12/',
                 'filename' => 'P10-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          174 => 
          array (
                 'id' => 175,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection13',
                 'path' => 'storage/tour10 collection13/',
                 'filename' => 'P10-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          175 => 
          array (
                 'id' => 176,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection14',
                 'path' => 'storage/tour10 collection14/',
                 'filename' => 'P10-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          176 => 
          array (
                 'id' => 177,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection15',
                 'path' => 'storage/tour10 collection15/',
                 'filename' => 'P10-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          177 => 
          array (
                 'id' => 178,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection16',
                 'path' => 'storage/tour10 collection16/',
                 'filename' => 'P10-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          178 => 
          array (
                 'id' => 179,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection17',
                 'path' => 'storage/tour10 collection17/',
                 'filename' => 'P10-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          179 => 
          array (
                 'id' => 180,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection18',
                 'path' => 'storage/tour10 collection18/',
                 'filename' => 'P10-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          180 => 
          array (
                 'id' => 181,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour10 collection19',
                 'path' => 'storage/tour10 collection19/',
                 'filename' => 'P10-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          181 => 
          array (
                 'id' => 182,
                 'collection_category' => 'tour',
                 'collection_title' => 'tour10',
                 'path' => 'storage/tour10/',
                 'filename' => 'C10-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

                  

      ));   
         
    }
}
