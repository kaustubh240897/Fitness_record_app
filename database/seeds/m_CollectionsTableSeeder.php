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
                 'collection_title' => '雪が積もる合掌造り集落',
                 'path' => 'storage/tour9 collection1/',
                 'filename' => 'P09-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          163 => 
          array (
                 'id' => 164,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '楕円形の五平餅が焼かれているところ',
                 'path' => 'storage/tour9 collection2/',
                 'filename' => 'P09-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          164 => 
          array (
                 'id' => 165,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'さるぼぼ',
                 'path' => 'storage/tour9 collection3/',
                 'filename' => 'P09-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          165 => 
          array (
                 'id' => 166,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '盆踊りをする人たち',
                 'path' => 'storage/tour9 collection4/',
                 'filename' => 'P09-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          166 => 
          array (
                 'id' => 167,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '睡蓮と鯉が泳ぐところ',
                 'path' => 'storage/tour9 collection5/',
                 'filename' => 'P09-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          167 => 
          array (
                 'id' => 168,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '城下町(古い街並)で着物散策しながらお団子たべている様子',
                 'path' => 'storage/tour9 collection6/',
                 'filename' => 'P09-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          168 => 
          array (
                 'id' => 169,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '金のしゃちほこと家康',
                 'path' => 'storage/tour9 collection7/',
                 'filename' => 'P09-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          169 => 
          array (
                 'id' => 170,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '龍が登るところ',
                 'path' => 'storage/tour9 collection8/',
                 'filename' => 'P09-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          170 => 
          array (
                 'id' => 171,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '稲荷の石像が並ぶところ',
                 'path' => 'storage/tour9 collection9/',
                 'filename' => 'P09-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          171 => 
          array (
                 'id' => 172,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '手筒花火をかかえて花火が吹き上がっている姿',
                 'path' => 'storage/tour9 collection10/',
                 'filename' => 'P09-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          172 => 
          array (
                 'id' => 173,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'うなぎ',
                 'path' => 'storage/tour9 collection11/',
                 'filename' => 'P09-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          173 => 
          array (
                 'id' => 174,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'お茶摘みと富士山',
                 'path' => 'storage/tour9 collection12/',
                 'filename' => 'P09-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          174 => 
          array (
                 'id' => 175,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '蓬莱橋と渡る人',
                 'path' => 'storage/tour9 collection13/',
                 'filename' => 'P09-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          175 => 
          array (
                 'id' => 176,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '三保の海岸と富士山',
                 'path' => 'storage/tour9 collection14/',
                 'filename' => 'P09-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          176 => 
          array (
                 'id' => 177,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '富士宮やきそば',
                 'path' => 'storage/tour9 collection15/',
                 'filename' => 'P09-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          177 => 
          array (
                 'id' => 178,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '反射炉',
                 'path' => 'storage/tour9 collection16/',
                 'filename' => 'P09-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          178 => 
          array (
                 'id' => 179,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '河津桜が先並ぶ姿と観光客',
                 'path' => 'storage/tour9 collection17/',
                 'filename' => 'P09-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          179 => 
          array (
                 'id' => 180,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'いろとろどりの梅の花が咲くところ',
                 'path' => 'storage/tour9 collection18/',
                 'filename' => 'P09-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          180 => 
          array (
                 'id' => 181,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '芦ノ湖と赤い鳥居',
                 'path' => 'storage/tour9 collection19/',
                 'filename' => 'P09-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          181 => 
          array (
                 'id' => 182,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '湘南の海岸から見た江の島',
                 'path' => 'storage/tour9 collection20/',
                 'filename' => 'P09-20.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          182 => 
          array (
                 'id' => 183,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '有名な鎌倉高校前の踏切',
                 'path' => 'storage/tour9 collection21/',
                 'filename' => 'P09-21.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          183 => 
          array (
                 'id' => 184,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'カレーライス',
                 'path' => 'storage/tour9 collection22/',
                 'filename' => 'P09-22.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          184 => 
          array (
                 'id' => 185,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '北京ダックなどの中華料理と円卓',
                 'path' => 'storage/tour9 collection23/',
                 'filename' => 'P09-23.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          185 => 
          array (
                 'id' => 186,
                 'collection_category' => 'tour',
                 'collection_title' => '富士山と家康と中国っぽい人(チャイナ服など)',
                 'path' => 'storage/tour9/',
                 'filename' => 'C09-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          186 => 
          array (
                 'id' => 187,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '夜景',
                 'path' => 'storage/tour10 collection1/',
                 'filename' => 'P10-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          187 => 
          array (
                 'id' => 188,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '昔の外国人が来日するところ',
                 'path' => 'storage/tour10 collection2/',
                 'filename' => 'P10-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          188 => 
          array (
                 'id' => 189,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '明石焼きとたこ',
                 'path' => 'storage/tour10 collection3/',
                 'filename' => 'P10-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          189 => 
          array (
                 'id' => 190,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '姫路城',
                 'path' => 'storage/tour10 collection4/',
                 'filename' => 'P10-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          190 => 
          array (
                 'id' => 191,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '赤穂浪士(討ち入りの服装)',
                 'path' => 'storage/tour10 collection5/',
                 'filename' => 'P10-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          191 => 
          array (
                 'id' => 192,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '備前焼の赤茶の壷',
                 'path' => 'storage/tour10 collection6/',
                 'filename' => 'P10-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          192 => 
          array (
                 'id' => 193,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '桃太郎',
                 'path' => 'storage/tour10 collection7/',
                 'filename' => 'P10-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          193 => 
          array (
                 'id' => 194,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ジーンズ',
                 'path' => 'storage/tour10 collection8/',
                 'filename' => 'P10-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          194 => 
          array (
                 'id' => 195,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'カブトガニ',
                 'path' => 'storage/tour10 collection9/',
                 'filename' => 'P10-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          195 => 
          array (
                 'id' => 196,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '常夜灯',
                 'path' => 'storage/tour10 collection10/',
                 'filename' => 'P10-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          196 => 
          array (
                 'id' => 197,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '猫と坂道の街',
                 'path' => 'storage/tour10 collection11/',
                 'filename' => 'P10-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          197 => 
          array (
                 'id' => 198,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'うさぎ(複数)',
                 'path' => 'storage/tour10 collection12/',
                 'filename' => 'P10-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          198 => 
          array (
                 'id' => 199,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '酒樽とほろ酔いの人',
                 'path' => 'storage/tour10 collection13/',
                 'filename' => 'P10-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          199 => 
          array (
                 'id' => 200,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '原爆ドーム',
                 'path' => 'storage/tour10 collection14/',
                 'filename' => 'P10-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          200 => 
          array (
                 'id' => 201,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '海の中の鳥居と鹿',
                 'path' => 'storage/tour10 collection15/',
                 'filename' => 'P10-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          201 => 
          array (
                 'id' => 202,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '錦帯橋と桜',
                 'path' => 'storage/tour10 collection16/',
                 'filename' => 'P10-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          202 => 
          array (
                 'id' => 203,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '工場夜景(煙が出ている、海にあかりが映るところなど)',
                 'path' => 'storage/tour10 collection17/',
                 'filename' => 'P10-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          203 => 
          array (
                 'id' => 204,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'たくさんの赤提灯を下から見ているイメージ 参考http://y-chouchin.jp/history/',
                 'path' => 'storage/tour10 collection18/',
                 'filename' => 'P10-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          204 => 
          array (
                 'id' => 205,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '緑に石灰石がぼこぼこ出ている様子',
                 'path' => 'storage/tour10 collection19/',
                 'filename' => 'P10-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          205 => 
          array (
                 'id' => 206,
                 'collection_category' => 'tour',
                 'collection_title' => '港町と海に浮かぶ船(瀬戸内海のイメージでお願いします)',
                 'path' => 'storage/tour10/',
                 'filename' => 'C10-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          206 => 
          array (
                 'id' => 207,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'まぐろの一本釣りの様子',
                 'path' => 'storage/tour11 collection1/',
                 'filename' => 'P11-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          207 => 
          array (
                 'id' => 208,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'イタコ',
                 'path' => 'storage/tour11 collection2/',
                 'filename' => 'P11-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          208 => 
          array (
                 'id' => 209,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '木上にニホンザル',
                 'path' => 'storage/tour11 collection3/',
                 'filename' => 'P11-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          209 => 
          array (
                 'id' => 210,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'りんご',
                 'path' => 'storage/tour11 collection4/',
                 'filename' => 'P11-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          210 => 
          array (
                 'id' => 211,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ねぶたの山車(難しいようであればハネト)',
                 'path' => 'storage/tour11 collection5/',
                 'filename' => 'P11-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          211 => 
          array (
                 'id' => 212,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'お堀に桜の花びらが敷き詰められている様子',
                 'path' => 'storage/tour11 collection6/',
                 'filename' => 'P11-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          212 => 
          array (
                 'id' => 213,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '奥入瀬渓流をトレッキングする様子。滝もしくはコケが生える川の流れを見ている',
                 'path' => 'storage/tour11 collection7/',
                 'filename' => 'P11-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          213 => 
          array (
                 'id' => 214,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'きりたんぽ鍋',
                 'path' => 'storage/tour11 collection8/',
                 'filename' => 'P11-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          214 => 
          array (
                 'id' => 215,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '秋田犬',
                 'path' => 'storage/tour11 collection9/',
                 'filename' => 'P11-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          215 => 
          array (
                 'id' => 216,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'なまはげ',
                 'path' => 'storage/tour11 collection10/',
                 'filename' => 'P11-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          216 => 
          array (
                 'id' => 217,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '竿燈まつりの竿燈が連なる様子(夜)',
                 'path' => 'storage/tour11 collection11/',
                 'filename' => 'P11-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          217 => 
          array (
                 'id' => 218,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '稲庭うどんを食べるところ',
                 'path' => 'storage/tour11 collection12/',
                 'filename' => 'P11-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          218 => 
          array (
                 'id' => 219,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '花火大会',
                 'path' => 'storage/tour11 collection13/',
                 'filename' => 'P11-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          219 => 
          array (
                 'id' => 220,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'しだれ桜と黒塀と人力車 参考：https://www.jalan.net/news/article/321070/',
                 'path' => 'storage/tour11 collection14/',
                 'filename' => 'P11-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          220 => 
          array (
                 'id' => 221,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '田沢湖と白く雪が積もる山々(湖畔に金色のたつこ像)',
                 'path' => 'storage/tour11 collection15/',
                 'filename' => 'P11-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          221 => 
          array (
                 'id' => 222,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'チャグチャグ馬コの馬の列 参考：http://www.city.takizawa.iwate.jp/01chag',
                 'path' => 'storage/tour11 collection16/',
                 'filename' => 'P11-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          222 => 
          array (
                 'id' => 223,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '盛岡冷麺',
                 'path' => 'storage/tour11 collection17/',
                 'filename' => 'P11-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          223 => 
          array (
                 'id' => 224,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'わんこそばを食べてる人(お椀山になっている)',
                 'path' => 'storage/tour11 collection18/',
                 'filename' => 'P11-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          224 => 
          array (
                 'id' => 225,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '河童',
                 'path' => 'storage/tour11 collection19/',
                 'filename' => 'P11-19.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          225 => 
          array (
                 'id' => 226,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '岩が多い海岸とウミネコが飛び回る',
                 'path' => 'storage/tour11 collection20/',
                 'filename' => 'P11-20.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          226 => 
          array (
                 'id' => 227,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '瓶ドン',
                 'path' => 'storage/tour11 collection21/',
                 'filename' => 'P11-21.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          227 => 
          array (
                 'id' => 228,
                 'collection_category' => 'tour',
                 'collection_title' => '河童と秋田犬がねぶた祭のハネトをしている',
                 'path' => 'storage/tour11/',
                 'filename' => 'C11-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          228 => 
          array (
                 'id' => 229,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'てっさ',
                 'path' => 'storage/tour12 collection1/',
                 'filename' => 'P12-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          229 => 
          array (
                 'id' => 230,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'かわらそば',
                 'path' => 'storage/tour12 collection2/',
                 'filename' => 'P12-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          230 => 
          array (
                 'id' => 231,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '角島大橋を渡る前のまっすぐ道路が続く姿と橋の上に車が通る',
                 'path' => 'storage/tour12 collection3/',
                 'filename' => 'P12-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          231 => 
          array (
                 'id' => 232,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '赤い鳥居が並ぶところ',
                 'path' => 'storage/tour12 collection4/',
                 'filename' => 'P12-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          232 => 
          array (
                 'id' => 233,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'コバルトブルーの池',
                 'path' => 'storage/tour12 collection5/',
                 'filename' => 'P12-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          233 => 
          array (
                 'id' => 234,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '菊屋横町の白いなまこ壁',
                 'path' => 'storage/tour12 collection6/',
                 'filename' => 'P12-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          234 => 
          array (
                 'id' => 235,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鷺舞',
                 'path' => 'storage/tour12 collection7/',
                 'filename' => 'P12-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          235 => 
          array (
                 'id' => 236,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ズワイガニ',
                 'path' => 'storage/tour12 collection8/',
                 'filename' => 'P12-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          236 => 
          array (
                 'id' => 237,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '赤天',
                 'path' => 'storage/tour12 collection9/',
                 'filename' => 'P12-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          237 => 
          array (
                 'id' => 238,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'つるはしで採掘する昔の人',
                 'path' => 'storage/tour12 collection10/',
                 'filename' => 'P12-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          238 => 
          array (
                 'id' => 239,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '会議をする神様達 参考：http://oeste.jp/blog/izumotaisha_kamiariduki/',
                 'path' => 'storage/tour12 collection11/',
                 'filename' => 'P12-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          239 => 
          array (
                 'id' => 240,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '船数隻がしじみ漁をしているところ。参考：https://www.pref.shimane.lg.jp/industry/suisan/shinkou/kawa_mizuumi/yutakana/sijimi_gyogyou.html',
                 'path' => 'storage/tour12 collection12/',
                 'filename' => 'P12-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          240 => 
          array (
                 'id' => 241,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'べたぶみばし',
                 'path' => 'storage/tour12 collection13/',
                 'filename' => 'P12-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          241 => 
          array (
                 'id' => 242,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '皆生温泉の砂浜を上から見た図(ゆみのような形が続く)',
                 'path' => 'storage/tour12 collection14/',
                 'filename' => 'P12-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          242 => 
          array (
                 'id' => 243,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '女性が巨大星占盤「九曜星占盤」で占っているところ',
                 'path' => 'storage/tour12 collection15/',
                 'filename' => 'P12-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          243 => 
          array (
                 'id' => 244,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '梨と梨を食べているところ',
                 'path' => 'storage/tour12 collection16/',
                 'filename' => 'P12-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          244 => 
          array (
                 'id' => 245,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鳥取砂丘とらくだ',
                 'path' => 'storage/tour12 collection17/',
                 'filename' => 'P12-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          245 => 
          array (
                 'id' => 246,
                 'collection_category' => 'tour',
                 'collection_title' => 'ふぐ・かに・梨を食べるらくだ',
                 'path' => 'storage/tour12/',
                 'filename' => 'C12-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          246 => 
          array (
                 'id' => 247,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '万博をイメージしたイラスト (旗がたくさん出ている感じ、でも昭和風)',
                 'path' => 'storage/tour13 collection1/',
                 'filename' => 'P13-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          247 => 
          array (
                 'id' => 248,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大阪城天守閣お豊臣秀吉',
                 'path' => 'storage/tour13 collection2/',
                 'filename' => 'P13-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          248 => 
          array (
                 'id' => 249,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'お好み焼き、たこ焼き、うどん',
                 'path' => 'storage/tour13 collection3/',
                 'filename' => 'P13-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          249 => 
          array (
                 'id' => 250,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '曲がり角の迫力がある引き回しのところ',
                 'path' => 'storage/tour13 collection4/',
                 'filename' => 'P13-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          250 => 
          array (
                 'id' => 251,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '水なすが実っているところ',
                 'path' => 'storage/tour13 collection5/',
                 'filename' => 'P13-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          251 => 
          array (
                 'id' => 252,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '梅干しと酸っぱい顔してる人',
                 'path' => 'storage/tour13 collection6/',
                 'filename' => 'P13-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          252 => 
          array (
                 'id' => 253,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '大きい樽で醤油を作る姿 イメージhttp://www.kadocho.co.jp/kodawari.html',
                 'path' => 'storage/tour13 collection7/',
                 'filename' => 'P13-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          253 => 
          array (
                 'id' => 254,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'なれ寿司　切った断面　参考：https://macaro-ni.jp/33162',
                 'path' => 'storage/tour13 collection8/',
                 'filename' => 'P13-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          254 => 
          array (
                 'id' => 255,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '森林の中のと石畳と地蔵と散策する人',
                 'path' => 'storage/tour13 collection9/',
                 'filename' => 'P13-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          255 => 
          array (
                 'id' => 256,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '温泉に入ってる女性がピカピカにきれいになっているところ',
                 'path' => 'storage/tour13 collection10/',
                 'filename' => 'P13-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          256 => 
          array (
                 'id' => 257,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '修行をするお坊さん(掃き掃除やお経を唱えるなどなんでもOKです)',
                 'path' => 'storage/tour13 collection11/',
                 'filename' => 'P13-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          257 => 
          array (
                 'id' => 258,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '柿の葉に包まれてる寿司(サーモンやまぐろなどいろんな種類)、なれずしと似てますが、柿の葉寿司は一つ一つ包まれています',
                 'path' => 'storage/tour13 collection12/',
                 'filename' => 'P13-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          258 => 
          array (
                 'id' => 259,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '斜面一面に桜が咲いている尾根とロープウェイ',
                 'path' => 'storage/tour13 collection13/',
                 'filename' => 'P13-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          259 => 
          array (
                 'id' => 260,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '茶粥',
                 'path' => 'storage/tour13 collection14/',
                 'filename' => 'P13-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          260 => 
          array (
                 'id' => 261,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鹿',
                 'path' => 'storage/tour13 collection15/',
                 'filename' => 'P13-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          261 => 
          array (
                 'id' => 262,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '抹茶を立てる人',
                 'path' => 'storage/tour13 collection16/',
                 'filename' => 'P13-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          262 => 
          array (
                 'id' => 263,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '京都五山送り火の山に火が映る様子',
                 'path' => 'storage/tour13 collection17/',
                 'filename' => 'P13-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          263 => 
          array (
                 'id' => 264,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '渡月橋と観光客',
                 'path' => 'storage/tour13 collection18/',
                 'filename' => 'P13-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          264 => 
          array (
                 'id' => 265,
                 'collection_category' => 'tour',
                 'collection_title' => 'お好み焼き・たこ焼き・ナスの漬物・柿の葉寿司・なれずしを食べてる人。(醤油は瓶で置いてる)',
                 'path' => 'storage/tour13/',
                 'filename' => 'C13-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          265 => 
          array (
                 'id' => 266,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '石畳道と石畳の塀から見えるハイビスカス',
                 'path' => 'storage/tour14 collection1/',
                 'filename' => 'P14-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          266 => 
          array (
                 'id' => 267,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ハーレー
                 参考：https://www.okinawastory.jp/event/600008994',
                 'path' => 'storage/tour14 collection2/',
                 'filename' => 'P14-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          267 => 
          array (
                 'id' => 268,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'シーサー',
                 'path' => 'storage/tour14 collection3/',
                 'filename' => 'P14-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          268 => 
          array (
                 'id' => 269,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'きこえおおきみ(琉球王国の神女)
                 参考：https://www.city.nanjo.okinawa.jp/sp/shisei/kouho/tokushu/1601342272/
                 https://www.tabirai.net/sightseeing/news/0001940.aspx
                 https://ameblo.jp/wahinehelela/entry-12607291149.html',
                 'path' => 'storage/tour14 collection4/',
                 'filename' => 'P14-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          269 => 
          array (
                 'id' => 270,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ガジュマルの木ときじむなー(赤い髪の男の子という目撃情報があるようです)',
                 'path' => 'storage/tour14 collection5/',
                 'filename' => 'P14-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          270 => 
          array (
                 'id' => 271,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'おしゃれなカフェでコーヒーを飲む女子',
                 'path' => 'storage/tour14 collection6/',
                 'filename' => 'P14-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          271 => 
          array (
                 'id' => 272,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'オープンカーで海中の道路を走る',
                 'path' => 'storage/tour14 collection7/',
                 'filename' => 'P14-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          272 => 
          array (
                 'id' => 273,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '青い海の中をシュノーケルする人と下に泳ぐ南国の魚',
                 'path' => 'storage/tour14 collection8/',
                 'filename' => 'P14-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          273 => 
          array (
                 'id' => 274,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '万座毛の象の形の岩とそれを見る観光客',
                 'path' => 'storage/tour14 collection9/',
                 'filename' => 'P14-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          274 => 
          array (
                 'id' => 275,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '沖縄そば',
                 'path' => 'storage/tour14 collection10/',
                 'filename' => 'P14-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          275 => 
          array (
                 'id' => 276,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ハートの形の岩と観光客',
                 'path' => 'storage/tour14 collection11/',
                 'filename' => 'P14-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          276 => 
          array (
                 'id' => 277,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'マングローブ林でカヤックをこぐ人',
                 'path' => 'storage/tour14 collection12/',
                 'filename' => 'P14-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          277 => 
          array (
                 'id' => 278,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ヤンバルクイナ',
                 'path' => 'storage/tour14 collection13/',
                 'filename' => 'P14-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          278 => 
          array (
                 'id' => 279,
                 'collection_category' => 'tour',
                 'collection_title' => 'シーサーと古民家とハイビスカス',
                 'path' => 'storage/tour14/',
                 'filename' => 'C14-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          279 => 
          array (
                 'id' => 280,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '函館山の夜景',
                 'path' => 'storage/tour15 collection1/',
                 'filename' => 'P15-01.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          280 => 
          array (
                 'id' => 281,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '小鳥と大きな沼',
                 'path' => 'storage/tour15 collection2/',
                 'filename' => 'P15-02.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          281 => 
          array (
                 'id' => 282,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '木彫りの熊',
                 'path' => 'storage/tour15 collection3/',
                 'filename' => 'P15-03.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          282 => 
          array (
                 'id' => 283,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'カニとカニ飯',
                 'path' => 'storage/tour15 collection4/',
                 'filename' => 'P15-04.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          283 => 
          array (
                 'id' => 284,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鮭とルイべ漬け',
                 'path' => 'storage/tour15 collection5/',
                 'filename' => 'P15-05.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          284 => 
          array (
                 'id' => 285,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '鬼と地獄谷の蒸気',
                 'path' => 'storage/tour15 collection6/',
                 'filename' => 'P15-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          285 => 
          array (
                 'id' => 286,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '北寄貝と漁師',
                 'path' => 'storage/tour15 collection7/',
                 'filename' => 'P15-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          286 => 
          array (
                 'id' => 287,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'アイヌの人とチセと呼ばれる樹皮でできた家
                 参考：https://intojapanwaraku.com/culture/2277/
                 https://www.ff-ainu.or.jp/web/learn/culture/together/details/post_2.html',
                 'path' => 'storage/tour15 collection8/',
                 'filename' => 'P15-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          287 => 
          array (
                 'id' => 288,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '網目のメロン',
                 'path' => 'storage/tour15 collection9/',
                 'filename' => 'P15-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          288 => 
          array (
                 'id' => 289,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'キタキツネ',
                 'path' => 'storage/tour15 collection10/',
                 'filename' => 'P15-10.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          289 => 
          array (
                 'id' => 290,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ラベンダー畑',
                 'path' => 'storage/tour15 collection11/',
                 'filename' => 'P15-11.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          290 => 
          array (
                 'id' => 291,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'パッチワークのように植物が育つ丘
                 参考：https://lavendertown.com/patchwork.html',
                 'path' => 'storage/tour15 collection12/',
                 'filename' => 'P15-12.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          291 => 
          array (
                 'id' => 292,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ジンギスカンを焼いているところ',
                 'path' => 'storage/tour15 collection13/',
                 'filename' => 'P15-13.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          292 => 
          array (
                 'id' => 293,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '木に実っているところ
                 参考：https://hokkaido-labo.com/area/all/haskap',
                 'path' => 'storage/tour15 collection14/',
                 'filename' => 'P15-14.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          293 => 
          array (
                 'id' => 294,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'ラーメン屋店員とラーメン(コーンとバターのってる)',
                 'path' => 'storage/tour15 collection15/',
                 'filename' => 'P15-15.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          294 => 
          array (
                 'id' => 295,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '雪像(北海道らしいもの　熊など)',
                 'path' => 'storage/tour15 collection16/',
                 'filename' => 'P15-16.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          295 => 
          array (
                 'id' => 296,
                 'collection_category' => 'checkpoint',
                 'collection_title' => '石造倉庫とガス灯と運河',
                 'path' => 'storage/tour15 collection17/',
                 'filename' => 'P15-17.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          296 => 
          array (
                 'id' => 297,
                 'collection_category' => 'tour',
                 'collection_title' => 'タラバガニ、鮭、いくら、イカ、とうもろこしなど北海道の名産の食べ物',
                 'path' => 'storage/tour15/',
                 'filename' => 'C15-00.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


                  

      ));   
         
    }
}
