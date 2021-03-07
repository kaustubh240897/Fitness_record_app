<?php

use Illuminate\Database\Seeder;

class m_CheckpointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('m__checkpoints')->delete();

    \DB::table('m__checkpoints')->insert(array (
        0 => 
          array (
                 'id' => 1,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '黒部ダム',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '1956年から７年の歳月をかけて建設され、えん堤の高さは186メートルで日本一の高さを誇ります。毎秒10～15トンの放水は大迫力です。',
                 'prefectures' => '富山',
                 'm__collection_id' => '1',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        
         1 => 
          array (
                 'id' => 2,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '黒部渓谷トロッコ列車',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '30',
                 'comments' => '黒部渓谷を縫うように走る全長20.1キロメートルのトロッコ列車。窓のない車窓からは四季折々の大自然を満喫できます。',
                 'prefectures' => '富山',
                 'm__collection_id' => '2',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        
           2 => 
          array (
                 'id' => 3,
                 'm__tour_id' => '1',
                 'checkpoint_title' => 'しんきろう(魚津)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '45',
                 'comments' => '江戸時代以前から蜃気楼の名所として有名。３月下旬～6月上旬にかけて港近くの海岸沿いでよく蜃気楼を見ることができます。',
                 'prefectures' => '富山',
                 'm__collection_id' => '3',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           3 => 
          array (
                 'id' => 4,
                 'm__tour_id' => '1',
                 'checkpoint_title' => 'ます寿司',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '70',
                 'comments' => '江戸時代から続く富山県の郷土料理。桜鱒を発酵させずに酢で味付けした押し寿司の一種です。作る店により肉厚感や酸味などが異なります。',
                 'prefectures' => '富山',
                 'm__collection_id' => '4',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           4 => 
          array (
                 'id' => 5,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '寒ぶり(氷見)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '100',
                 'comments' => '富山湾の中心部に位置する氷見市近海で捕獲される寒ぶりは、最も脂がのっていると言われています。',
                 'prefectures' => '富山',
                 'm__collection_id' => '5',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           5 => 
          array (
                 'id' => 6,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '和倉温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '130',
                 'comments' => '1200年前にシラサギが沐浴しているところを漁師夫婦が発見し温泉が見つかったと言われています。日本でも珍しい海の温泉が湧き出る温泉です。七尾湾の海沿いに隣接しており、温泉と景観で癒しの効果が抜群です。',
                 'prefectures' => '石川',
                 'm__collection_id' => '6',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           6 => 
          array (
                 'id' => 7,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '増穂浦海岸',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '155',
                 'comments' => '11月～3月にかけて「貝寄せ風」が吹き、さくら貝などが流れ着きます。さらに全長約460メートルのギネスブックに掲載されていたことのある「世界一長いベンチ」があります。',
                 'prefectures' => '石川',
                 'm__collection_id' => '7',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           7 => 
          array (
                 'id' => 8,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '輪島塗',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '185',
                 'comments' => '輪島塗の特徴は、輪島市でしか採れない輪島地の粉を使用していること。 輪島で採れる地の粉は良質な土で、下地に使用することによって、より強度の高い漆器が出来上がります。お椀ができるまでには100以上の行程があり、１年かかることもあるようです。',
                 'prefectures' => '石川',
                 'm__collection_id' => '8',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           8 => 
          array (
                 'id' => 9,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '白米千枚田',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '205',
                 'comments' => '白米千枚田は石川県輪島市白米町にある棚田です。日本海に面した斜面に小さな田んぼが重なる風景は絶景です。国指定文化財名勝に指定されています。',
                 'prefectures' => '石川',
                 'm__collection_id' => '9',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          9 => 
          array (
                 'id' => 10,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '曹洞宗大本山　總持寺祖院',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '235',
                 'comments' => '1312年開創の由緒ある寺院。明治の大火を機に本山は横浜に移しましたが、荘厳な佇まいは健在です。現在も全国の禅僧が集まり、一般の方も予約をすると精進料理や坐禅体験ができます。',
                 'prefectures' => '石川',
                 'm__collection_id' => '10',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          10 => 
          array (
                 'id' => 11,
                 'm__tour_id' => '1',
                 'checkpoint_title' => 'ヤセの断崖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '有名小説の舞台として有名。清華の撮影地にもなった高さ35メートルの断崖です。その昔、周辺の土地がやせていたことや、断崖に立つと身が痩せる思いをすることからその名がついたと言われています。',
                 'prefectures' => '石川',
                 'm__collection_id' => '11',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          11 => 
          array (
                 'id' => 12,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '千里浜なぎさドライブウェイ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '285',
                 'comments' => '日本唯一、普通の車で走ることのできる全長8キロメートルの砂浜です。自転車で走ることもできます。',
                 'prefectures' => '石川',
                 'm__collection_id' => '12',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          12 => 
          array (
                 'id' => 13,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '兼六園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '305',
                 'comments' => '日本三名園の一つ。江戸時代の代表的な大名庭園として、加賀歴代藩主により長い歳月をかけて造営されました。様々な庭園手法を駆使してつくられた庭園はたくさんの植栽に彩られて四季折々の美しさを楽しめます。',
                 'prefectures' => '石川',
                 'm__collection_id' => '13',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          13 => 
          array (
                 'id' => 14,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '九谷焼',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '325',
                 'comments' => '九谷焼は石川県南部の地域で生産される色絵の磁器です。陶器よりも絵を書くのに適しているといわれ多色で大胆な色絵が特徴です。',
                 'prefectures' => '石川',
                 'm__collection_id' => '14',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          14 => 
          array (
                 'id' => 15,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '加賀温泉郷',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '345',
                 'comments' => '半径約8キロの小さな範囲にある粟津、片山津、山代、山中の4つの温泉地からなる温泉郷です。日本三名山の一つ「霊峰白山」の峰々を望め、さらに日本海の恵みや芳醇な地酒が堪能できます。',
                 'prefectures' => '石川',
                 'm__collection_id' => '15',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          15 => 
          array (
                 'id' => 16,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '恐竜',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '375',
                 'comments' => '福井県は数多くの恐竜の化石が発見され「恐竜王国」と呼ばれています。恐竜博物館や化石発掘体験ができるスポットなどもあり、街全体が恐竜のテーマパークのようです。',
                 'prefectures' => '福井',
                 'm__collection_id' => '16',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          16 => 
          array (
                 'id' => 17,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '曹洞宗大本山　永平寺',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '400',
                 'comments' => '曹洞宗開祖・道元禅師が寛元2年(1244)年開いた坐禅の修行道場。現在でも多くの修行僧が、早朝の起床にはじまり、勤行、坐禅、行鉢、「動の坐禅」といわれる作務など日夜厳しい修行に励んでいます。',
                 'prefectures' => '福井',
                 'm__collection_id' => '17',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          17 => 
          array (
                 'id' => 18,
                 'm__tour_id' => '1',
                 'checkpoint_title' => '東尋坊',
                 'checkpoint_category' => '終了',
                 'distance' => '430',
                 'comments' => '荒々しい岩肌の柱状節理が延々と1kmに渡っていており、国の名勝・天然記念物に指定されています。なかでも岸壁の高さが20メートル以上に及ぶ大地の断崖は大迫力です。',
                 'prefectures' => '福井',
                 'm__collection_id' => '18',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          18 => 
          array (
                 'id' => 19,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '天橋立',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '宮津湾にある「天橋立」は日本三景のひとつです。幅約20～170メートル・全長約3.6キロメートルの砂浜と約5000本もの松が茂っている地形が、天にかかる橋のように見えることから名がつきました。',
                 'prefectures' => '京都',
                 'm__collection_id' => '20',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          19 => 
          array (
                 'id' => 20,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '天岩戸神社(あまのいわとじんじゃ)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '20',
                 'comments' => '福知山市内の日室ヶ嶽(ひむろがたけ)の麓にある「元伊勢三社.」の一社。天照大御神lが降臨した聖山として古くから崇められています。本殿は渓谷の奇岩に張り付くように建てられています。直接参拝するには鎖を伝って岩を登らなければなりません。',
                 'prefectures' => '京都',
                 'm__collection_id' => '21',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          20 => 
          array (
                 'id' => 21,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '福知山城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '40',
                 'comments' => '天成7年(1579年)頃、丹波国を平定した明智光秀により築かれた城です。城主は光秀の娘婿である明智秀満がつとめました。石垣は当時のまま天守閣は昭和61年に復元されました。',
                 'prefectures' => '京都',
                 'm__collection_id' => '22',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          21 => 
          array (
                 'id' => 22,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '琴滝',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '70',
                 'comments' => '高さ43メートルの１枚岩から流れ落ちる水の流れが13弦の琴糸のように見えることから「琴滝」と呼ばれています。',
                 'prefectures' => '京都',
                 'm__collection_id' => '23',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          22 => 
          array (
                 'id' => 23,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '亀岡の牡丹鍋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '90',
                 'comments' => 'ヘルシーかつ栄養価が高いことで近年人気になっているジビエ料理。
                 亀岡を含む丹波地方では古くから猟期の時期になると（11月15日から3月中ごろ）猪肉を鍋料理として親しまれてきました。
                 「ぼたん」の由来は、スライスされた赤い猪肉を、大皿に盛り付けた様子が牡丹に見えることからその名がついたそうです。',
                 'prefectures' => '京都',
                 'm__collection_id' => '24',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          23 => 
          array (
                 'id' => 24,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '天龍寺',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '120',
                 'comments' => '臨済宗天龍寺派大本山の寺院。世界文化遺産である曹源池庭園は1年通して風情があり、中でも紅葉の時期の美しさは圧巻です。また、法堂では特別公開時のみに拝観ができる天井一面に描かれた「雲龍図」が有名です。',
                 'prefectures' => '京都',
                 'm__collection_id' => '25',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          24 => 
          array (
                 'id' => 25,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '伏見稲荷大社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '135',
                 'comments' => '全国約3万社ある稲荷神社の総本宮。商売繁盛・家内安全のご利益があるとされています。境内全域に連なる朱塗りの鳥居は「千本鳥居」と呼ばれ、人気のスポットです。',
                 'prefectures' => '京都',
                 'm__collection_id' => '26',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          25 => 
          array (
                 'id' => 26,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '比叡山延暦寺',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '165',
                 'comments' => '天台宗の総本山。標高848メートルの比叡山全体を携帯とする寺院で、世界文化遺産に登録されています。また、戦国時代に織田信長が焼き討ちにあった歴史もあります。',
                 'prefectures' => '滋賀',
                 'm__collection_id' => '27',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          26 => 
          array (
                 'id' => 27,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '琵琶湖大橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '185',
                 'comments' => '全長1400メートル、幅6.5メートルの琵琶湖に架かる橋。緩やかなアーチを描く美しいデザインで、最高地点は水面から26メートルもあり、下を大型観光船が通るために高さが確保されています。',
                 'prefectures' => '滋賀',
                 'm__collection_id' => '28',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          27 => 
          array (
                 'id' => 28,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '八幡堀',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '205',
                 'comments' => '安土・桃山時代に豊臣秀次の八幡山城下居城のもと、城下町が栄える要因となった街の一大静脈です。近江商人の発祥と発展、また街の繁栄に大きな役割を果たしました。近年になって観光名所として整備され、船着場などが復元されました。',
                 'prefectures' => '京都',
                 'm__collection_id' => '29',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          28 => 
          array (
                 'id' => 29,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '彦根城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '225',
                 'comments' => '井伊直政の子直継・直孝が慶長9年(1604年)に着手し、20年の歳月をかけて完成させました。以後、井伊氏歴代の居城となりました。現在天守は国宝に指定されています。',
                 'prefectures' => '京都',
                 'm__collection_id' => '30',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          29 => 
          array (
                 'id' => 30,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '安土城跡',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '245',
                 'comments' => '標高200メートルの安土山山頂に、天成4年(1576年)から織田信長が約3年の歳月をかけて完成しましたが、わずか3年後の本能寺の変後に消失して石垣だけが残っています。',
                 'prefectures' => '京都',
                 'm__collection_id' => '31',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          30 => 
          array (
                 'id' => 31,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '信楽焼',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '275',
                 'comments' => '甲賀市信楽を中心に作られる陶器。信楽焼は、鉄分がほんのり焼かれて赤くなる緋色(火色)、燃え尽きた灰がつもることでできる焦げ、灰が積もり土に含まれる成分と溶け合って青、緑、黄緑色のガラス質に変化するビードロ釉の3つが特徴となっています。商売繁盛の縁起物として狸の置物が有名です。',
                 'prefectures' => '京都',
                 'm__collection_id' => '32',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          31 => 
          array (
                 'id' => 32,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '忍者(伊賀)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '295',
                 'comments' => '敵の情報を収集する影の立役者として暗躍した忍者。全国では特に、伊賀の地に優れた忍者が発達しました。戦国時代に本格的に裏舞台に関わるようになり、江戸幕府に仕えた服部半蔵は伊賀をルーツとする人物として有名です。',
                 'prefectures' => '三重',
                 'm__collection_id' => '33',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          32 => 
          array (
                 'id' => 33,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '青山高原',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '320',
                 'comments' => '伊賀と伊勢の間にある標高600メートル～800メートルにある大草原。日本最大級の風力発電の風車群と知多半島を見渡せるパノラマは圧巻です。',
                 'prefectures' => '三重',
                 'm__collection_id' => '34',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          33 => 
          array (
                 'id' => 34,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '御城番屋敷(ごじょうばんやしき)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '345',
                 'comments' => '江戸末期に州藩士が松阪城護衛のために移り住んだ武家屋敷。このような組み屋敷は全国でも珍しく、現在も紀州藩士の子孫が暮らしながら管理しています。西棟北端1軒は内部を公開しています。国の指定重要文化財です。',
                 'prefectures' => '三重',
                 'm__collection_id' => '35',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          34 => 
          array (
                 'id' => 35,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '伊勢神宮',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '375',
                 'comments' => '伊勢神宮は通称で、正式名称は「神宮」といいます。天照大御神をお祀りする内宮と、衣食住はじめ産業の守り神である豊受大神宮をお祀りする外宮が有名ですが、大小様々な社が伊勢志摩地域には点在し、すべて合わせると125社からなる神社です。',
                 'prefectures' => '三重',
                 'm__collection_id' => '36',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          35 => 
          array (
                 'id' => 36,
                 'm__tour_id' => '2',
                 'checkpoint_title' => '英虞湾(あごわん)',
                 'checkpoint_category' => '終了',
                 'distance' => '400',
                 'comments' => '志摩半島南部に位置する湾の名称で、複数に入り組んだリアス式海岸で、湾内にたくさんの島々が浮かんでいます。真珠養殖でも有名です。標高140メートルにある横山展望台からの景色は絶景です。',
                 'prefectures' => '三重',
                 'm__collection_id' => '37',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          36 => 
          array (
                 'id' => 37,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '松島湾',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '日本三景の一つ。湾内には260もの島が点在しています。江戸時代から日本を代表する景勝地で松尾芭蕉の奥の細道でも有名。遊覧船で湾内を回ることもできます。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '39',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          37 => 
          array (
                 'id' => 38,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '七夕祭り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '25',
                 'comments' => '毎年8月6日・7日・8日に開催している東北三大祭りの一つ。江戸時代より続く由緒ある祭りです。豪華な笹飾りが仙台の街を彩ります。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '40',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          38 => 
          array (
                 'id' => 39,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '秋保大滝',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '45',
                 'comments' => '日本三名瀑の一つで、日本の滝百選にも選ばれています。幅6メートル、落差55メートル大きな滝です。滝壺の近くまで行くことができ、迫力満点の滝を見上げることができます。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '41',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          39 => 
          array (
                 'id' => 40,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '牛タン',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '65',
                 'comments' => '仙台は「牛タン焼き」の発祥の地です。街を歩けば沢山の牛タン専門店を目にします。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '42',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          40 => 
          array (
                 'id' => 41,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'ひまわりの丘',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '95',
                 'comments' => '宮城県大崎市三本木にあり、6ヘクタールに約42万本のひまわりが咲き誇ります。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '43',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          41 => 
          array (
                 'id' => 42,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '鳴子峡',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '125',
                 'comments' => '鳴子温泉から車で10分ほどの国道47号に並行して走るV字型渓谷。高さ約100メートルの断崖絶壁が2.5キロメートルにわたって続き、紅葉時期の景色は圧巻です。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '44',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          42 => 
          array (
                 'id' => 43,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '小杉の大杉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '155',
                 'comments' => '鮭川村にある樹齢約1000年、根回り6.3メートル、高さ20メートルもある大木。寄り添うような形が夫婦杉、縁結びの杉とも言われ、パワースポットとしても知られています。遠くから見る姿が有名なアニメのキャラクターにも似ていることで有名になりました。',
                 'prefectures' => '山形',
                 'm__collection_id' => '45',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          43 => 
          array (
                 'id' => 44,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '山居倉庫',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '185',
                 'comments' => '明治26年(1893)に建てられた酒田のシンボルとして有名な米の保管倉庫です。白壁、土蔵づくりの12棟からなる倉庫群のうち、9棟は現在も農業倉庫として使用されています。夏の高温防止に背後はケヤキで囲まれ、内部湿気防止に二重屋根にするなど先人の知恵が生かされています。',
                 'prefectures' => '山形',
                 'm__collection_id' => '46',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          44 => 
          array (
                 'id' => 45,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'だだちゃ豆',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '210',
                 'comments' => 'だだちゃ豆は山形県鶴岡市でしか栽培されない特産品です。「だだちゃ」とは庄内地方の方言で「おやじ」「お父さん」という意味。噛めば噛むほど旨みと甘みが広がる美味しさで、「枝豆の王様」とも言われています。',
                 'prefectures' => '山形',
                 'm__collection_id' => '47',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          45 => 
          array (
                 'id' => 46,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '出羽三山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '240',
                 'comments' => '山形県の中央にそびえる「羽黒山」「月山」「湯殿山」の総称で、山岳信仰の場とされていました。羽黒山は現世の幸せを祈る山、月山は死後の安楽と往生を祈る山、湯殿山は生まれ変わりを祈る山という三世の浄土を表すとされます。',
                 'prefectures' => '山形',
                 'm__collection_id' => '48',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          46 => 
          array (
                 'id' => 47,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '最上川三難所',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '270',
                 'comments' => '平安時代から始まったとされる最上川の舟運。中流に点在する(碁点、三ヶ瀬、隼)は、船頭に恐れられる難関スポットであったといわれていました。現在は舟下りが楽しめます。',
                 'prefectures' => '山形',
                 'm__collection_id' => '49',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          47 => 
          array (
                 'id' => 48,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '銀山温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '300',
                 'comments' => '木造の旅館が軒を連ね銀山温泉は大正ロマン漂う温泉街です。ガス燈に照らされた街並みは情緒があり、季節によっても様々な景色が楽しめます。',
                 'prefectures' => '山形',
                 'm__collection_id' => '50',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          48 => 
          array (
                 'id' => 49,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '立石寺',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '330',
                 'comments' => '山寺という名で親しまれており、松尾芭蕉の奥の細道に登場することでも有名です。山全体が修行と信仰の場となっており、1015段の石段を登った先には絶景が広がっています。',
                 'prefectures' => '山形',
                 'm__collection_id' => '51',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          49 => 
          array (
                 'id' => 50,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '蔵王樹氷',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '360',
                 'comments' => '1月から2月頃に樹氷群が見ることができます。この地特有の気象条件でできた氷雪に覆われた松の姿が怪物のように見えることから「スノーモンスター」と呼ばれており、ロープウェイからの景色は圧巻です。',
                 'prefectures' => '山形',
                 'm__collection_id' => '52',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          50 => 
          array (
                 'id' => 51,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '米沢牛',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '390',
                 'comments' => '山形県南部で飼育された黒毛和牛の中で、5つの厳しい基準をクリアしたものだけが「米沢牛」と認定されます。和牛本来の柔らかなお肉とサシが特徴で、その上質な脂は溶け出す温度が低いため、口に入れるととろけるような感覚が味わえます。',
                 'prefectures' => '山形',
                 'm__collection_id' => '53',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          51 => 
          array (
                 'id' => 52,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '五色沼',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '420',
                 'comments' => '福島県の裏磐梯にある磐梯山の噴火によってつくられた美しい湖沼。正式には「五色沼湖沼群」といい、数多くの湖沼の総称です。気候、季節、温度、見る角度、水中に含まれる火山性物質などにより、様々な色彩を見ることができることから五色沼と呼ばれるようになりました。',
                 'prefectures' => '福島',
                 'm__collection_id' => '54',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          52 => 
          array (
                 'id' => 53,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '鶴ヶ城(若松城)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '450',
                 'comments' => '会津若松のシンボルの鶴ヶ城は全国でも稀な赤瓦の天守閣として有名です。室町時代の始めの至徳元年(1384年)に葦名直盛が造設し、のちに蒲生氏郷が豊臣秀吉の命令で会津を治め、天守閣を築きました。幕末の戊辰戦争では新政府軍の猛攻に耐え難攻不落の名城称えられました。明治に取り壊されましたが現在の天守閣は昭和40年(1965)に再建されました。',
                 'prefectures' => '福島',
                 'm__collection_id' => '55',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          53 => 
          array (
                 'id' => 54,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '大内宿',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '470',
                 'comments' => '江戸時代に会津若松と日光を結ぶ重要な宿場町として栄えました。現在も茅葺屋根の民家が立ち並び、国選定重要伝統的建造物保存地区に指定されています。箸のかわりにネギ1本を使って食べる「ねぎそば」は見た目のインパクトから観光客に人気となり名物になっています。',
                 'prefectures' => '福島',
                 'm__collection_id' => '56',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          54 => 
          array (
                 'id' => 55,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '猪苗代湖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '500',
                 'comments' => '日本で4番目に大きな湖で福島のシンボルになっています。また、猪苗代湖の北岸は野口英世のふるさとです。',
                 'prefectures' => '福島',
                 'm__collection_id' => '57',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          55 => 
          array (
                 'id' => 56,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '三春滝桜',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '535',
                 'comments' => '三春町にある国の天然記念物の指定を受けた日本三大桜の一つ。樹高13.5メートル、幹周りは11.3メートルで、樹齢はおよそ1000年以上と伝えられる紅枝垂桜です。夕暮れからのライトアップもおすすめ。',
                 'prefectures' => '福島',
                 'm__collection_id' => '58',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          56 => 
          array (
                 'id' => 57,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'あぶくま洞',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '555',
                 'comments' => '約8000万年という歳月をかけて創られた鍾乳洞で、全長約600メートルもあり、鍾乳石の種類は東洋一ともいわれています。',
                 'prefectures' => '福島',
                 'm__collection_id' => '59',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          57 => 
          array (
                 'id' => 58,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '相馬野馬追',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '590',
                 'comments' => '南相馬で3日間かけて行われる祭りで、1000年もの歴史のあり国の重要無形民俗文化財に指定されています。初日の総大将の出陣式を皮切りに、二日目の甲冑競馬、神旗争奪戦など、まるで戦国時代へタイムスリップしたかのような雰囲気に包まれます。',
                 'prefectures' => '福島',
                 'm__collection_id' => '60',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          58 => 
          array (
                 'id' => 59,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '桃',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '620',
                 'comments' => '福島県では多くの種類の桃が栽培されています。中でも福島で生まれた品種「あかつき」は肉質が緻密で甘味が強くジューシー。袋をかけない栽培が広く取り入れられてるため、太陽の光を浴び、色と味のいい桃に育ちます。',
                 'prefectures' => '福島',
                 'm__collection_id' => '61',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          59 => 
          array (
                 'id' => 60,
                 'm__tour_id' => '3',
                 'checkpoint_title' => '御釜',
                 'checkpoint_category' => '終了',
                 'distance' => '650',
                 'comments' => '蔵王の宮城県側にあるエメラルドグリーンの火口湖。お釜状の形から名前がついています。',
                 'prefectures' => '宮城',
                 'm__collection_id' => '62',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          60 => 
          array (
                 'id' => 61,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '天草天然イルカウォッチ',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '天草の海には200頭以上の野生のイルカが生息しており、船に乗れば一年を通して98％の確率で間近に見ることができます。',
                 'prefectures' => '熊本',
                 'm__collection_id' => '64',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          61 => 
          array (
                 'id' => 62,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '御輿来海岸',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '40',
                 'comments' => '有明海は干満の差が激しく、潮が引いた海岸の砂地には、風と波による美しい砂の曲線が現れます。年に10数日、干潮と夕方が重なる日は世界中から多くのカメラマンが訪れます。',
                 'prefectures' => '熊本',
                 'm__collection_id' => '65',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          62 => 
          array (
                 'id' => 63,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '熊本城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '70',
                 'comments' => '日本三名城の一つの熊本城は加藤清正によって慶長6年(1601年)に着工され7年の歳月をかけ完成されました。熊本城の石垣は上部に向かうほど急な角度になる独特の作りが特徴で、城に侵入しようとした敵を返してしまうことから「武者返し」と異名を持ちます。',
                 'prefectures' => '熊本',
                 'm__collection_id' => '66',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          63 => 
          array (
                 'id' => 64,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '阿蘇山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '110',
                 'comments' => '阿蘇山一帯には草千里や米塚など、火山が生み出した自然の見どころがたくさんあります。阿蘇中岳は現在も活発な噴火活動を続けており、白い煙をあげる火口周辺はダイナミックな山肌を望むことができます。',
                 'prefectures' => '熊本',
                 'm__collection_id' => '67',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          64 => 
          array (
                 'id' => 65,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '高千穂峡',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '140',
                 'comments' => '昔阿蘇山の噴出した火砕流が冷え固まり侵食された断崖がそり立つ渓谷で、平均80メートルの断崖が7キロメートルも続いています。渓谷には、日本の滝百選に選ばれている「真名井の滝」もあり、ボートに乗って真下から見上げる景色は圧巻です。',
                 'prefectures' => '宮崎',
                 'm__collection_id' => '68',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          65 => 
          array (
                 'id' => 66,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '願いが叶うクルスの海',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '180',
                 'comments' => '日向市日向岬にある展望台から見えるクルスの海は、その岩の形状が「叶」という文字に見えることから願いが叶うと言われるようになりました。「クルス」はポルトガル語で「十字」を意味します。',
                 'prefectures' => '宮崎',
                 'm__collection_id' => '69',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          66 => 
          array (
                 'id' => 67,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '西都原古墳群',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '220',
                 'comments' => '東西約2.6キロメートル・南北4.2メートル・標高50～80メートルの台地に4世紀前半から７世紀前半にかけての古墳が300基以上点在しており、世界最大級の規模を誇ります。国の特別史跡の指定を受けています。',
                 'prefectures' => '宮崎',
                 'm__collection_id' => '70',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          67 => 
          array (
                 'id' => 68,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '青島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '周囲1.5キロメートルの島は周りを「鬼の洗濯板」と呼ばれる波状岩で囲まれており、島の中央には縁結びにご利益がある青島神社があります。島には亜熱帯植物が多く茂り、南国の雰囲気も味わえるパワースポットです。',
                 'prefectures' => '宮崎',
                 'm__collection_id' => '71',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          68 => 
          array (
                 'id' => 69,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '鵜戸神宮',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '275',
                 'comments' => '海に面した洞窟の中に、鮮やかな朱塗りの本殿が鎮座する珍しい神社です。縁結び、安産、育児、海上安全などのパワースポットでも知られ、岩のくぼみに石を投げ入れると願いが叶うとされる「運玉」が有名です。',
                 'prefectures' => '宮崎',
                 'm__collection_id' => '72',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          69 => 
          array (
                 'id' => 70,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '都井岬',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '305',
                 'comments' => '串間市にある都井岬には、野生の馬が生息しており、草原と海を背景に、草をはむ姿を観察することができます。',
                 'prefectures' => '宮崎',
                 'm__collection_id' => '73',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          70 => 
          array (
                 'id' => 71,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '石油備蓄基地',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '330',
                 'comments' => '志布志湾に浮かぶ196ヘクタールの人工島には、43基の白いタンクが並び、国内消費量の約９日分の原油が備蓄されています。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '74',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          71 => 
          array (
                 'id' => 72,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '桜島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '370',
                 'comments' => '鹿児島のシンボルの桜島は今も噴煙を上げ灰を降らせる世界有数の活火山です。元々は島でしたが、1914年の噴火で溶岩が流出し、大隅半島の一部となりました。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '75',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          72 => 
          array (
                 'id' => 73,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '黒酢',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '390',
                 'comments' => '霧島市福山町は1800年代初期に生産が開始された黒酢の発祥の地です。屋外に並べた壷を使って仕込み発酵させる独特な製法されます。発酵と熟成にそれぞれ6ヶ月以上をかけ生まれる特有の香りとまろやかな酸味が特徴です。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '76',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          73 => 
          array (
                 'id' => 74,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '城山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '430',
                 'comments' => '鹿児島市街地の中心部に位置する標高107メートルの城山は、明治10年(1877年)の西南戦争の最後の激戦地となったため、周辺には西南戦争にまつわる史跡が多く存在し、西郷隆盛ファンは訪れたい場所のひとつです。また展望台からは桜島をはじめ錦江湾や鹿児島市街地を一望できます。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '77',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          74 => 
          array (
                 'id' => 75,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '知覧武家屋敷',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '460',
                 'comments' => '知覧町には江戸時代に造られた武家屋敷群が今もそのままの形で残され、薩摩の小京都とも称されています。約700メートルの通りに現存している武家屋敷のうち、７軒の屋敷の庭園は国の名勝にも指定されています。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '78',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          75 => 
          array (
                 'id' => 76,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '指宿温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '490',
                 'comments' => '指宿は市内の至るところから源泉が湧き出ており、その数は1000以上といわれています。天然砂むし風呂は、海岸の砂浜で温められた砂をかぶる姿が名物になっています。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '79',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          76 => 
          array (
                 'id' => 77,
                 'm__tour_id' => '4',
                 'checkpoint_title' => '竜宮神社',
                 'checkpoint_category' => '終了',
                 'distance' => '510',
                 'comments' => '薩摩半島の最南端の長崎鼻は浦島太郎が竜宮へ旅立ったと言い伝えられています。別名「竜宮岬」ともいわれ、龍宮神社には豊玉姫(乙姫様)を祀っています。',
                 'prefectures' => '鹿児島',
                 'm__collection_id' => '80',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          77 => 
          array (
                 'id' => 78,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '別府温泉',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '別府温泉は日本一の湧出量を誇り、源泉数は約2850本。町のあちこちから湯気が立ち上ります。人が入浴できる温泉地としては世界最大とのこと。別府名物地獄めぐりなど観光も楽しめます。',
                 'prefectures' => '大分',
                 'm__collection_id' => '82',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          78 => 
          array (
                 'id' => 79,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '安心院',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '30',
                 'comments' => '安心院と書いて「あじむ」と読みます。読めない地名としても有名ですが、気候的に大変霧が出やすく、それを活かしたブドウ栽培と地ワインで栄える町です。',
                 'prefectures' => '大分',
                 'm__collection_id' => '83',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          79 => 
          array (
                 'id' => 80,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '中津',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '55',
                 'comments' => '中津は福沢諭吉が19歳まで過ごした街で知られ、市内には生家や資料館など歴史好きには欠かせないスポットです。また、黒田官兵衛が築城した中津城も必見です。現在はからあげの聖地として唐揚げ専門店が多数出店していることでも有名です。',
                 'prefectures' => '大分',
                 'm__collection_id' => '84',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          80 => 
          array (
                 'id' => 81,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '平尾台',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '95',
                 'comments' => '日本三大カルストのひとつとして、天然記念物・国立公園・県立自然公園の指定を受ける「平尾台」は、標高300～700メートル、南北6キロメートル、東西2キロメートルにわたり石灰岩が点在する一帯はトレッキングコースがあり、変わった形の岩などが見所です。',
                 'prefectures' => '福岡',
                 'm__collection_id' => '85',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          81 => 
          array (
                 'id' => 82,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '門司港レトロ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '125',
                 'comments' => '明治から昭和初期にかけて横浜・神戸と並ぶ国際貿易の拠点として栄えた門司港には、当時建築された趣のある建物が今でも残っており、現在ではレトロな雰囲気が漂う人気の観光地になっています。',
                 'prefectures' => '福岡',
                 'm__collection_id' => '86',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          82 => 
          array (
                 'id' => 83,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '志賀島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '160',
                 'comments' => '博多湾に浮かぶ島で、砂州により海の中道と陸続きになっています。志賀島では弥生時代に交流のあった漢から卑弥呼の送ったと言われる金印が見つかった場所として有名です。さらに島内の志賀海神社は君が代のルーツだと言われています。',
                 'prefectures' => '福岡',
                 'm__collection_id' => '87',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          83 => 
          array (
                 'id' => 84,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '博多',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '190',
                 'comments' => '博多は言わずと知れたグルメ王国。もつ鍋や水炊き、博多とんこつラーメン、鉄鍋餃子などなど・・・美味しいグルメの宝庫です。また、博多の夜といえば、屋台街。全国の屋台の約40％が博多に集中しており、博多の街を盛り上げています。',
                 'prefectures' => '福岡',
                 'm__collection_id' => '88',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          84 => 
          array (
                 'id' => 85,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '大宰府',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '210',
                 'comments' => '学問・至誠・厄除けの神様である菅原道真公を祀り、天満宮の総本宮があります。受験シーズンには多くの学生が参拝することでも有名です。',
                 'prefectures' => '福岡',
                 'm__collection_id' => '89',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          85 => 
          array (
                 'id' => 86,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '柳川川下り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '235',
                 'comments' => '柳川には「掘割」と呼ばれる水路が縦横に走っており、城下町の人々の生活に利用されていました。柳川城の水門や低い橋の下をくぐったりと、歴史漂う町並みを楽しめます。',
                 'prefectures' => '福岡',
                 'm__collection_id' => '90',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          86 => 
          array (
                 'id' => 87,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '吉野ヶ里遺跡',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '全長2.5キロメートルの弥生時代の代表的な遺跡です。現在では、高見やぐらや竪穴住居、高床倉庫などが復元され、弥生時代の雰囲気を楽しめるようになっています。',
                 'prefectures' => '佐賀',
                 'm__collection_id' => '91',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          87 => 
          array (
                 'id' => 88,
                 'm__tour_id' => '5',
                 'checkpoint_title' => 'バルーン',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '275',
                 'comments' => '佐賀市では毎年「佐賀インターナショナルバルーンフェスタ」を開催しており、世界中からトップクラスの選手が集まり競い合う大会が行われています。青空に様々な色の熱気球が浮かぶ姿は圧巻です。',
                 'prefectures' => '佐賀',
                 'm__collection_id' => '92',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          88 => 
          array (
                 'id' => 89,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '呼子のイカ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '310',
                 'comments' => '玄界灘に面した唐津市呼子はイカの街として有名。呼子名物「イカの活造り」は鮮度抜群なイカをすばやく活造りにしたもので、味も食感も格別です。',
                 'prefectures' => '佐賀',
                 'm__collection_id' => '93',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          89 => 
          array (
                 'id' => 90,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '佐世保バーガー',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '345',
                 'comments' => '佐世保はハンバーガー伝来の地と言われており、戦後まもなく米海軍基地からレシピが伝えられ、駐留アメリカ人に発売されていました。その後、市民に愛されながら佐世保流に変化し現在の佐世保バーガーになりました。佐世保バーガーは全店手作りで店舗により調味料が異なるため、様々な味を楽しめます。',
                 'prefectures' => '佐賀',
                 'm__collection_id' => '94',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          90 => 
          array (
                 'id' => 91,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '西海橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '375',
                 'comments' => '1955年に佐世保市と西海市を結ぶ橋として建築されました。この西海橋の見所は、日本三大急潮のひとつに数えられる針尾瀬戸の急流の渦潮で、大村湾の海水が干潮で幅わずか200メートルの針尾瀬戸を通過する様は圧巻です。',
                 'prefectures' => '長崎',
                 'm__collection_id' => '95',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          91 => 
          array (
                 'id' => 92,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '稲佐山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '405',
                 'comments' => '世界三大夜景に認定された「1000万ドルの夜景」と称される長崎市の夜景を望む絶景スポットです。頂上へはロープウェイが運行しており、360度ガラス張りのゴンドラからの眺めも格別です。',
                 'prefectures' => '長崎',
                 'm__collection_id' => '96',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          92 => 
          array (
                 'id' => 93,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '大村湾',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '435',
                 'comments' => '長崎県の中央部に位置し、四方を陸で囲まれているため外の海の影響が少なく、潮の満ち引きはわずか90センチメートルほどで、スナメリやカブトガニなどが生息しています。湾内には海上に作られた長崎空港の滑走路があります。',
                 'prefectures' => '長崎',
                 'm__collection_id' => '97',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          93 => 
          array (
                 'id' => 94,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '諫早フルーツバス停',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '455',
                 'comments' => '諫早市内中心部から国道207号を佐賀方面に向かう途中、小長井地区の道路脇に突然現れるフルーツをかたどったバス停。このフルーツバス停の設置は、1990年に開催された長崎旅博覧会で、玄関口として訪れる人々を和ませるために小長井町が整備したものです。いちごやメロン、すいかなど全5種類16基のフルーツのバス停が設置されています。',
                 'prefectures' => '長崎',
                 'm__collection_id' => '98',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          94 => 
          array (
                 'id' => 95,
                 'm__tour_id' => '5',
                 'checkpoint_title' => '雲仙温泉',
                 'checkpoint_category' => '終了',
                 'distance' => '495',
                 'comments' => '島原半島にの中心部に位置し、雲仙一帯は日本初の国立公園に指定されました。標高700メートルの地に湧く雲仙温泉は戦前には外国人が避暑地として利用していました。約30から絶えず吹き上がる噴煙と硫黄の香りの雲仙地獄や、雲仙岳を始めとする標高1000メートル山々など、自然溢れる温泉です。',
                 'prefectures' => '長崎',
                 'm__collection_id' => '99',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          95 => 
          array (
                 'id' => 96,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '鋸山',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '房総半島をの南部に位置する鋸山は、砕石によって露出した岩がノコギリの形に見えることからその名がつきました。ロープウェイも運行しており、気軽に散策が楽しめます。展望台からは東京湾や伊豆大島、さらに富士山まで見ることができます。反り勃った崖をから下を覗く「地獄のぞき」はスリル満点です！',
                 'prefectures' => '千葉',
                 'm__collection_id' => '101',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          96 => 
          array (
                 'id' => 97,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '濃溝の滝・亀岩の洞窟',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '30',
                 'comments' => '洞窟内に差し込む光がハート型に見えることからSNSで話題となった君津にある人口に作られた洞窟。ハート型に見える日は限られますが、大きな岩のトンネル内を階段状に流れる滝の美しさは幻想的です。',
                 'prefectures' => '千葉',
                 'm__collection_id' => '102',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          97 => 
          array (
                 'id' => 98,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '東浪見海岸(とらみかいがん)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '65',
                 'comments' => '九十九里の南にある東浪見海岸「日の出」「朝焼け」「星空」の絶景を楽しめるとして人気のスポットです。特に砂浜にある鳥居はフォトスポットとしても人気があり、鳥居の間から日の出を見たり、鳥居を含めて夜空を写真に撮ったりと、たくさんの人が訪れ幻想的な景色を楽しんでいます。',
                 'prefectures' => '千葉',
                 'm__collection_id' => '103',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          98 => 
          array (
                 'id' => 99,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '落花生',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '95',
                 'comments' => '千葉の特産品といえば落花生！国内産の約8割が千葉県で生産されています。現在主に5種類の落花生が栽培されており、畑でゆっくり自然乾燥された千葉県産の落花生は、味の良さで強い支持を得ています。',
                 'prefectures' => '千葉',
                 'm__collection_id' => '104',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          99 => 
          array (
                 'id' => 100,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '成田山新勝寺',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '115',
                 'comments' => '平安時代の中期に起こった「平将門の乱」の平定のため、寛朝大僧正によって開山されました。真言宗智山派の大本山の一つ。年間1000万人を超える参詣者が訪れ、歌舞伎の市川宗家とも深い縁があることでも有名です。広大な境内にはたくさんのお堂があり、開運厄除や商売繁盛など、それぞれのお堂でご利益があるといわれています。',
                 'prefectures' => '千葉',
                 'm__collection_id' => '105',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          100 => 
          array (
                 'id' => 101,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '鹿島神宮',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '150',
                 'comments' => '鹿島神宮は紀元前660年の創建といわれ、関東地方最古・最大の神社にして全国にある鹿島神社の総本社です。武の神様「武甕槌大神」が祀られ、勝負事にご利益があると言われています。',
                 'prefectures' => '茨城',
                 'm__collection_id' => '106',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          101 => 
          array (
                 'id' => 102,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '牛久の大仏',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '175',
                 'comments' => '牛久市にある浄土真宗東本願寺派・本山東本願寺の中に立つ高さ120メートルの青銅の大仏です。1993年に完成した牛久大仏は1995年にギネス世界記録にも認定されています。',
                 'prefectures' => '茨城',
                 'm__collection_id' => '107',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          102 => 
          array (
                 'id' => 103,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '霞ヶ浦',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '195',
                 'comments' => '霞ヶ浦は日本で二番目の面積を誇る淡水湖です。湖周辺は見所がたくさんありますが、夏の風物詩となっているのが帆引き船です。明治時代から風力を利用して網を引き漁を行っていましたが、昭和40年代に一旦なくなりました。現在は観光帆引き船として運行しています。',
                 'prefectures' => '茨城',
                 'm__collection_id' => '108',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          103 => 
          array (
                 'id' => 104,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '偕楽園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '225',
                 'comments' => '偕楽園は日本三名園のひとつに数えられ、天保13年(1842年)に水戸藩第９代藩主徳川斉昭公により造られました。偕楽園には約100種3000本の梅が植えられ、2月下旬から３月にかけて「水戸の梅まつり」が開催され多くの観光客が訪れます。',
                 'prefectures' => '茨城',
                 'm__collection_id' => '109',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          104 => 
          array (
                 'id' => 105,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '竜神大吊橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '常陸太田市の竜神ダムに架かる竜神大吊橋は、長さ375メートルあり、歩行者専用の橋として日本最大級です。ダムの湖面からの高さは100メートルもあり、橋の中程にあるアクリルの板から見下ろす眺めはスリル満点です。また、バンジージャンプの体験もでき、日本最大級のスリルを味わうことができます。',
                 'prefectures' => '茨城',
                 'm__collection_id' => '110',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          105 => 
          array (
                 'id' => 106,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '袋田の滝',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '275',
                 'comments' => '久慈川の支流滝川にかかる袋田の滝は日本三名爆の一つに数えられ、高さ120メートル、幅73メートルの大きさを誇ります。四段の岩壁を流れ落ちる滝は四季折々に美しい姿を織りなします。',
                 'prefectures' => '茨城',
                 'm__collection_id' => '111',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          106 => 
          array (
                 'id' => 107,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '那須高原',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '310',
                 'comments' => '那須連山の東山麓に広がる高原は、温泉旅館、ゴルフ場、牧場など自然あふれる観光地です。また、皇室の方々が静養する御用邸があることから「ロイヤルリゾート那須」としても知られています。',
                 'prefectures' => '栃木',
                 'm__collection_id' => '112',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          107 => 
          array (
                 'id' => 108,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '鬼怒川温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '330',
                 'comments' => '鬼怒川渓谷沿いに旅館やホテルが立ち並ぶ関東有数の大型温泉地。江戸時代に発見され、日光詣の僧侶や大名のみが入ることが許された由緒正しい温泉です。',
                 'prefectures' => '栃木',
                 'm__collection_id' => '113',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          108 => 
          array (
                 'id' => 109,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '日光東照宮',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '350',
                 'comments' => '1617年に徳川家康公を祀る神社とし建てられました。現在そのほとんどの建築物が国宝や国の重要文化財に指定され、1999年には世界遺産にも登録されています。美しい彫刻が目を引く日光東照宮は風水と陰陽道に則り建てられ、日本屈指のパワースポットとして、参拝すれば運気が上がるといわれています。',
                 'prefectures' => '栃木',
                 'm__collection_id' => '114',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          109 => 
          array (
                 'id' => 110,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '尾瀬',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '380',
                 'comments' => '群馬県新潟県福島県栃木県にまたがる日本最大の山岳湿原の国立公園です。群馬県側の「鳩待峠」を基点とした「尾瀬ヶ原コース」は、湿原の中に木動画伸び、春には水芭蕉が楽しめるなど、尾瀬の有名な景色を堪能できることでも人気のコースです。',
                 'prefectures' => '群馬',
                 'm__collection_id' => '115',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          110 => 
          array (
                 'id' => 111,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '吹割の滝',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '410',
                 'comments' => '沼田市利根町にある吹割の滝は、別名「東洋のナイアガラ」とも呼ばれ天然記念物及び名勝に指定されています。幅30メートル、高さ7メートルの横に長い珍しい滝です。',
                 'prefectures' => '群馬',
                 'm__collection_id' => '116',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          111 => 
          array (
                 'id' => 112,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '伊香保温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '445',
                 'comments' => '榛名山の東側、標高700メートルの地に広がる群馬県を代表する名湯です。万葉集にも登場する歴史深い温泉地で明治以降は多くの著名人も訪れています。シンボルは365段の石段で、両側に旅館やみやげ物屋、飲食店なのが並びます。',
                 'prefectures' => '群馬',
                 'm__collection_id' => '117',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          112 => 
          array (
                 'id' => 113,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '富岡製糸場',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '480',
                 'comments' => '養蚕が盛んな富岡に明治政府が日本の近代文化のために設立した製糸場で、世界遺産にも登録されました。木骨と赤レンガ造りの建物は現在もほとんど当時のままの姿で保存されています。',
                 'prefectures' => '群馬',
                 'm__collection_id' => '118',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          113 => 
          array (
                 'id' => 114,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '長瀞',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '515',
                 'comments' => '埼玉県の北西部に位置する荒川沿いに、全長6キロメートルに及ぶ長瀞渓谷は国指定の名勝地です。岩畳やライン下り、ラフティングなど様々な見所やアクティビティがあり、年間を通して観光客がこの戸を訪れます。',
                 'prefectures' => '埼玉',
                 'm__collection_id' => '119',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          114 => 
          array (
                 'id' => 115,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '妻沼聖天山歓喜院',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '545',
                 'comments' => '日本三大聖天のうちの一つに数えられ、本殿は国宝に指定されています。本殿「聖天道」は宝暦10年(1760年)に再建され、日光東照宮を彷彿とさせる本格的装飾建築で、「埼玉日光」と称されれいます。',
                 'prefectures' => '埼玉',
                 'm__collection_id' => '120',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          115 => 
          array (
                 'id' => 116,
                 'm__tour_id' => '6',
                 'checkpoint_title' => '川越',
                 'checkpoint_category' => '終了',
                 'distance' => '480',
                 'comments' => '現在も江戸時代の蔵造りの街並みが残り「小江戸」と呼ばれ、街歩きが楽しめます。歴史情緒溢れる川越一番街や、約400年も昔から時を知られてきた時の鐘、縁結びで有名な川越氷川神社など見所がたくさんあり、老若男女様々な観光客で賑わいます。',
                 'prefectures' => '埼玉',
                 'm__collection_id' => '121',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          116 => 
          array (
                 'id' => 117,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '鳴門の渦潮',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '鳴門市と淡路島のあいだの鳴門海峡は渦潮が有名です。瀬戸内海と紀伊水道の干満差により激しい潮流が発生することでできる現象で、春と秋の大潮時には直径20メートルにも達することがあり世界最大といわれています。',
                 'prefectures' => '徳島',
                 'm__collection_id' => '123',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          117 => 
          array (
                 'id' => 118,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '阿波踊り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '20',
                 'comments' => '400年の歴史を持つ徳島の伝統的なお祭り。三味線や太鼓などの鳴り物に合わせて踊り子グループがリズミカルに踊り歩き、観客を魅了します。徳島県の各地で開催されますが、最も賑わいを見せるのが国内外から100万人を超える観光客が訪れる徳島市の阿波踊りです。',
                 'prefectures' => '徳島',
                 'm__collection_id' => '124',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          118 => 
          array (
                 'id' => 119,
                 'm__tour_id' => '7',
                 'checkpoint_title' => 'うだつの町並み',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '35',
                 'comments' => '美馬市にある「うだつの町並み」は江戸から明治にかけて栄えた城下町で、現在でも「四国のまほろば」とも呼ばれる美しい町並みが残っています。430メートルの表通りには、漆喰の白壁と本瓦葺きの統一された建物が並んでいます。うだつとは防火用に隣家との間に設けられた袖壁のことで、とても高価なため富裕層しか設置ができず、富と成功の証しとして「うだつが上がらない」という言葉につながったそうです。',
                 'prefectures' => '徳島',
                 'm__collection_id' => '125',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          119 => 
          array (
                 'id' => 120,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '栗林公園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '55',
                 'comments' => '高松市内にあり、国の特別名勝に指定されている庭園の中で最大の広さを持ちます。高松藩主松平家の別邸として、歴代藩主が修築を重ねて300年近く前に完成しました。6つの池と13の築山をからなる江戸初期の回遊式庭園で、ミシュラン・グリーンガイド・ジャポンでも三星評価を獲得しています。',
                 'prefectures' => '香川',
                 'm__collection_id' => '126',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          120 => 
          array (
                 'id' => 121,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '瀬戸大橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '75',
                 'comments' => '岡山県と香川県を結ぶ本州四国連絡橋の一つで、道路と鉄道の併用橋としては世界最大級。6つの橋と4つの高架橋の総称し「瀬戸大橋」と呼びます。',
                 'prefectures' => '香川',
                 'm__collection_id' => '127',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          121 => 
          array (
                 'id' => 122,
                 'm__tour_id' => '7',
                 'checkpoint_title' => 'さぬきうどん',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '125',
                 'comments' => '香川にいったら絶対食べたいものといえば「讃岐うどん」。「うどん県」と名の付くほど数多くのうどんのお店があります。セルフタイプ、製麺所タイプ、一般店タイプと店独自の提供方法もあり、それぞれの店で特徴も異なるため、うどんの食べ歩きもおすすめです。',
                 'prefectures' => '香川',
                 'm__collection_id' => '128',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          122 => 
          array (
                 'id' => 123,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '大歩危・小歩危',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '150',
                 'comments' => '大股で歩いても、小股で歩いても危険といわれていたことからその地名がついた徳島の秘境。吉野川の激流によって2億年の時をかけ形成された渓谷です。おおよそ8キロメートルの渓谷は大理石の彫刻がそそり立っているかのようで迫力満点です。国の天然記念物、国指定名勝にも登録されており、舟下りやラフティングなどもあり間近で渓谷美を楽しめます。',
                 'prefectures' => '徳島',
                 'm__collection_id' => '129',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          123 => 
          array (
                 'id' => 124,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '杉の大杉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '175',
                 'comments' => '大豊町の八坂神社境内にある特別天然記念物に指定された推定樹齢3000年の日本一の大杉です。約20メートルと約16.5メートルの2株の杉が根元で一つになっており、その昔須佐之男命が植えたと伝えられています。また、かつて歌手の美空ひばりさんが願をかけ日本一の歌手になったことから「出世杉」の異名もあります。',
                 'prefectures' => '高知',
                 'm__collection_id' => '130',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          124 => 
          array (
                 'id' => 125,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '桂浜',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '200',
                 'comments' => '太平洋に面した高知県を代表する景勝地です。弧を描く海岸は松の木を青い海が調和が美しく、古くから月の名所としても知られています。英雄・坂本龍馬の銅像も有名です。',
                 'prefectures' => '高知',
                 'm__collection_id' => '131',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          125 => 
          array (
                 'id' => 126,
                 'm__tour_id' => '7',
                 'checkpoint_title' => 'にこ淵',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '225',
                 'comments' => '仁淀川の上流にあたるにこ淵は、仁淀ブルーと呼ばれる秘境の絶景。底の岩が見えるほどの透明度がある滝壺に光が差し込み、水の色が時間帯によってグリーンやブルーに変化します。',
                 'prefectures' => '高知',
                 'm__collection_id' => '132',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          126 => 
          array (
                 'id' => 127,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '石槌山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '250',
                 'comments' => '愛媛県の西条市と久万高原町の境界にある標高1982メートルの石鎚山は、日本百名山、日本七霊山のひとつとしてパワースポットとしても人気のスポットです。登山はもちろんロープウェイを利用しハイキングも楽しめます。',
                 'prefectures' => '愛媛',
                 'm__collection_id' => '133',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          127 => 
          array (
                 'id' => 128,
                 'm__tour_id' => '7',
                 'checkpoint_title' => 'しまなみ海道',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '275',
                 'comments' => '広島と愛媛のを結ぶ全長約60キロメートルの「瀬戸内しまなみ海道」は、瀬戸内海の島々と7つの橋が結んだ道路です。日本で初めて海峡を横断できる自転車道としてサイクリストも人気のスポットです。正式名称は「西瀬戸自動車道」。',
                 'prefectures' => '愛媛',
                 'm__collection_id' => '134',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          128 => 
          array (
                 'id' => 129,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '道後温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '300',
                 'comments' => '3000年の歴史がある道後温泉は、日本書紀にも登場する名湯で、温泉街のシンボル「道後温泉本館」は重要文化財に指定されています。夏目漱石や正岡子規のゆかりの地としても知られ、「坊ちゃん」の舞台としても有名です。',
                 'prefectures' => '愛媛',
                 'm__collection_id' => '135',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          129 => 
          array (
                 'id' => 130,
                 'm__tour_id' => '7',
                 'checkpoint_title' => 'みかん',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '325',
                 'comments' => '愛媛県はみかんの生産量は全国トップクラスを誇り「柑橘王国」で知られています。瀬戸内の温暖な気候により、みかんを始めいよかんやデコポンなどの様々な柑橘類が育てられ、その数は年間通して約21万トンも収穫されています。',
                 'prefectures' => '愛媛',
                 'm__collection_id' => '136',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          130 => 
          array (
                 'id' => 131,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '大洲',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '350',
                 'comments' => '「伊予の小京都」と呼ばれる大洲は、江戸から明治時代にかけての家並みや町並みが当時のまま残っており、歴史情緒溢れる城下町です。また昭和を感じることのできるエリアもあり、タイムスリップをしたような不思議な空間が見所です。',
                 'prefectures' => '愛媛',
                 'm__collection_id' => '137',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          131 => 
          array (
                 'id' => 132,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '宇和島鯛めし',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '375',
                 'comments' => '愛媛といえば鯛めしで有名ですが、宇和島の鯛めしは炊き込みご飯とは違って、新鮮な鯛のお刺身にダシ、醤油、みりんと生卵をかけていただきます。宇和島の郷土料理として古くから愛されています。',
                 'prefectures' => '愛媛',
                 'm__collection_id' => '138',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          132 => 
          array (
                 'id' => 133,
                 'm__tour_id' => '7',
                 'checkpoint_title' => '四万十沈下橋',
                 'checkpoint_category' => '終了',
                 'distance' => '400',
                 'comments' => '四万十の沈下橋とは、増水時に川に沈まないように設計された欄干のない橋のことで、四万十川の代表的な風景として有名です。48本もある沈下橋の中で観光客に人気がある岩間沈下橋は、川が大きく曲がるポイントにあり、ポスターでも使われることもあるフォトジェニックなスポットです。',
                 'prefectures' => '高知',
                 'm__collection_id' => '139',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          133 => 
          array (
                 'id' => 134,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '浅草寺',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '浅草の代表的なスポットといえば浅草寺。東京都内最古のお寺です。その始まりは西暦628年に宮戸川(現在の隅田川)で漁をしていた兄弟の網に仏像がかかり、兄弟の主人がこの像を拝して出家したことが始まりとのこと。「雷門」とかかれた赤い大提灯が浅草のシンボルとして有名です。',
                 'prefectures' => '東京',
                 'm__collection_id' => '141',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          134 => 
          array (
                 'id' => 135,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '明治神宮',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '15',
                 'comments' => '920年に創建された明治神宮には明治天皇と昭憲皇太后をお祀りしています。約70万平方メートルの境内には、270種類およそ17万本の木々が植えられており、東京の真ん中にあるとは思えないほど自然に溢れています。近年ではパワースポットとしても知られ、たくさんの参拝者が訪れています。',
                 'prefectures' => '東京',
                 'm__collection_id' => '142',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          135 => 
          array (
                 'id' => 136,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '井の頭恩賜公園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '30',
                 'comments' => '武蔵野市吉祥寺にあり、約42万平方メートルの広大な敷地を誇ります。井の頭池を中心に道が整備され、池の周りには約250本の桜が植えられています。また、敷地内には弁財天や動物と触れ合えう自然文化園などの施設もあり、見所もたくさんある公園です。',
                 'prefectures' => '東京',
                 'm__collection_id' => '143',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          136 => 
          array (
                 'id' => 137,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '高尾山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '60',
                 'comments' => '八王子市にある標高599メートルの山で、都心から1時間とアクセスも良く誰でも登れる優しい山として世界一の登山者数を誇ります。高尾山には数々の天狗のお話が残っており、高尾山薬王院では開運や魔除けなど多くのご利益をもたらす役割をもっているそうです。パワースポット高尾山薬王院の山道には名物グルメを扱う茶屋が点在し、子供から大人まで楽しめます。',
                 'prefectures' => '東京',
                 'm__collection_id' => '144',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          137 => 
          array (
                 'id' => 138,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '甲斐の猿橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '90',
                 'comments' => '大月市にある日本三奇橋の一つ。橋脚を使わない特殊な作りで四層のはねぎによって支えられています。長さ30.9メートル、幅3.3メートル、高さ31メートルの橋は、西暦600年ごろ、百済からきた造園博士の志羅呼が難航していた橋の建設の途中で、たくさんの猿が繋がり合い対岸へ渡る姿からヒントを得て橋を作り上げたことから、名前の由来にもなっているそうです。',
                 'prefectures' => '山梨',
                 'm__collection_id' => '145',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          138 => 
          array (
                 'id' => 139,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '富士五湖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '120',
                 'comments' => '富士山麓の山梨側に位置する富士五湖(山中湖、河口湖、西湖、精進湖、本栖湖)は、富士山の噴火によってできた堰止湖。遊覧やアクティビティが楽しめ、周辺はリゾート地として人気です。それぞれの湖から見る富士山は絶景で、河口湖は逆さ富士、本栖湖では千円札にも描かれている北岸からの富士山などビュースポットがたくさんあります。',
                 'prefectures' => '山梨',
                 'm__collection_id' => '146',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          139 => 
          array (
                 'id' => 140,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '武田神社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '150',
                 'comments' => '甲府市に大正8年(1919年)に創建された武田信玄公を祀った神社です。甲斐の守護神としてではなく、信玄公の勝運の強さから勝負事へのご利益や「自分に勝つ」と言う信仰、商業や経済・政治で勝つというご利益などから幅広いご利益をもたらすとして参拝客が絶えません。',
                 'prefectures' => '山梨',
                 'm__collection_id' => '147',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          140 => 
          array (
                 'id' => 141,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '小淵沢高原',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '180',
                 'comments' => '八ヶ岳南麓の標高1000メートル前後に位置し、夏でも湿度が低く涼しい小淵沢高原。昔から馬を育てるのに適した地域だったため、現在では数多くの乗馬クラブがあります。高原リゾートしても人気が高いエリアです。',
                 'prefectures' => '山梨',
                 'm__collection_id' => '148',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          141 => 
          array (
                 'id' => 142,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '諏訪湖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '210',
                 'comments' => '長野県の諏訪市と岡谷市、下諏訪町にまたがる周囲約15.9キロメートルの湖。水上カヌーや水陸両用バス、ワカサギ釣りなどのアクティビティが楽しめます。周囲には諏訪神社の総本社や、温泉地、大ヒット映画のモデルとなった公園や建物などがあり、夏には花火大会も開催されます。',
                 'prefectures' => '長野',
                 'm__collection_id' => '149',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          142 => 
          array (
                 'id' => 143,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '松本城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '235',
                 'comments' => '松本城は戦後時代の永正年間に造られた深志城が始まりで、五重六階の天守が現存している日本最古の城で、国宝に指定されています。白漆喰と黒漆塗りのコントラストが美しくアルプスの山々に映えて見事な景観です。',
                 'prefectures' => '長野',
                 'm__collection_id' => '150',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          143 => 
          array (
                 'id' => 144,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '別所温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '270',
                 'comments' => '信州で最も古い歴史を持ち、数々の文化財に囲まれた歴史ロマン溢れる温泉。また、弱アルカリ性の泉質で美肌の湯としても有名です。さらに別所のある上田市は松茸の産地としても知られ、秋には松茸料理を楽しめます。',
                 'prefectures' => '長野',
                 'm__collection_id' => '151',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          144 => 
          array (
                 'id' => 145,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '上田城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '285',
                 'comments' => '真田氏の居城の上田城は、真田幸村の父・真田昌幸が1583年に築城しました。数少ない兵力で二度にわたって徳川軍の撃退した難攻不落の名城として、国の史跡に指定されました。また近年は桜まつりや紅葉まつりも行われ、上田の観光の中心としてたくさんの観光客が訪れています。',
                 'prefectures' => '長野',
                 'm__collection_id' => '152',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          145 => 
          array (
                 'id' => 146,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '信州そば',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '320',
                 'comments' => '長野県はそば切り発祥の地とされ、昼夜の寒暖差が大きく、水はけのよい土地がそばの栽培に向いています。そばの種類や食べ方も多様で、日本三大そばのひとつ「戸隠そば（とがくしそば）」や、そばの実の中心部分だけを使った「更科そば」などさまざまなそばを楽しめるのが魅力です。',
                 'prefectures' => '長野',
                 'm__collection_id' => '153',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          146 => 
          array (
                 'id' => 147,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '地獄谷野猿公苑',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '350',
                 'comments' => '長野県北部、標高850メートル横湯川の渓谷にある地獄谷野猿公苑は、温泉につかる野生のニホンザルが見られることで有名です。1970年にアメリカの雑誌の表紙を飾り「スノーモンキー」という愛称で親しまれるようになり、外国からもたくさんの観光客が訪れるようになりました。温泉の途中にも野生のサルが間近で見ることができます。',
                 'prefectures' => '長野',
                 'm__collection_id' => '154',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          147 => 
          array (
                 'id' => 148,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '野沢温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '380',
                 'comments' => '長野県の野沢温泉村は日本で唯一温泉がつく村名で、江戸時代より湯治湯としてにぎわいをみせてきました。村にはたくさんの源泉が自噴しており、入浴以外にも洗濯や野菜をゆでたりと村人の生活と深く関わっています。現在では日本有数のスキー場としても有名です。また、長野県の名産でもある野沢菜漬の発祥の地でもあります。',
                 'prefectures' => '長野',
                 'm__collection_id' => '155',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          148 => 
          array (
                 'id' => 149,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '清津峡',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '415',
                 'comments' => '十日町市の清津峡は日本三大渓谷の一つ。川を挟んで切り立つ巨大な岩壁は、V字型の大渓谷ををつくりダイナミックな景色をつくっています。清津峡渓谷トンネル奥のパノラマステーションの風景は四季折々表情が変わり、何度も訪れたくなるような美しさが楽しめます。',
                 'prefectures' => '新潟',
                 'm__collection_id' => '156',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          149 => 
          array (
                 'id' => 150,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '長岡まつり大花火大会',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '450',
                 'comments' => '日本三大花火大会のひとつで、毎年8月2日・3日の2日間で行われる新潟県長岡市の夏の名物となっています。2日間で約100万人も訪れ、約2万発もの花火が打ち上がります。',
                 'prefectures' => '新潟',
                 'm__collection_id' => '157',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          150 => 
          array (
                 'id' => 151,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '弥彦神社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '480',
                 'comments' => '新潟県内随一のパワースポットとしても人気を集める弥彦神社は、弥彦山を御神体とし、古くから「おやひこさま」と親しまれてきました。創建から2400年以上の歴史を有するとされる神社で、日本最古の万葉集にも詠われています。仕事運アップ、縁結びのパワーが授かれると多くの参拝客が訪れます。',
                 'prefectures' => '長野',
                 'm__collection_id' => '158',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          151 => 
          array (
                 'id' => 152,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '瓢湖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '515',
                 'comments' => '阿賀野市にある「瓢湖」は江戸時代に造られた用水地で、現在では「白鳥の飛来地」として国の天然記念物に指定されています。毎年10月上旬から３月下旬まで滞在し、11月下旬頃のピーク時には5000羽～6000羽の白鳥が飛来します。',
                 'prefectures' => '長野',
                 'm__collection_id' => '159',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          152 => 
          array (
                 'id' => 153,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '新発田　足軽長屋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '535',
                 'comments' => '江戸時代末期の新発田藩の足軽長屋は、藩政当時のままで現存しており、国の指定重要文化財です。当時の下級武士が住んでいた八軒長屋で、木造茅葺きの質素な建物は当時の足軽たちの暮らしぶりを感じさせてくれます。',
                 'prefectures' => '長野',
                 'm__collection_id' => '160',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          153 => 
          array (
                 'id' => 154,
                 'm__tour_id' => '8',
                 'checkpoint_title' => '瀬波温泉',
                 'checkpoint_category' => '終了',
                 'distance' => '570',
                 'comments' => '日本海に面する村上市にあり、海に沈む美しい夕日を見ることのできる評判の温泉地です。海岸沿いに立ち並ぶお宿のお部屋や露天風呂などから見る夕日は絶景で、リピーターも多いとのこと。海岸線沿いの海水浴場は水がきれいと新潟でも人気の場所です。',
                 'prefectures' => '長野',
                 'm__collection_id' => '161',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          154 => 
          array (
                 'id' => 155,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '白川郷',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '岐阜県の白川郷合掌造り集落は、1995年に世界文化遺産に登録されました。ミシュランで3つ星としても掲載されており、田んぼに囲まれた中に茅葺の合掌造りの家が点在する山村の景色は、まさに日本の原風景です。',
                 'prefectures' => '岐阜',
                 'm__collection_id' => '163',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          155 => 
          array (
                 'id' => 156,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '五平餅',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '35',
                 'comments' => '岐阜県や長野県などの山間部に伝わる郷土料理で、近年テレビドラマで注目を浴びました。山仕事をする人たちが、仕事の合間に、ご飯をつぶして板切れに握りつけて焼き、味噌をつけて食べたのが始まりともいわれています。味は味噌だれ、醤油だれ、くるみやえごまを混ぜたたれなど、形はわらじ型、丸型など地域によって違いが楽しめます。',
                 'prefectures' => '岐阜',
                 'm__collection_id' => '164',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          156 => 
          array (
                 'id' => 157,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '下呂温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '65',
                 'comments' => '1000年以上の歴史があり、江戸時代より湯治場として栄えてきた下呂温泉は草津、有馬と並ぶ日本三名泉のひとつ。泉質はアルカリ性単純泉で、ルスベスベした肌触りから別名「美人の湯」とも呼ばれています。また、温泉街には様々な足湯や岐阜のお土産では定番のさるぼぼを祀る珍しい神社もあり、観光も楽しめます。',
                 'prefectures' => '岐阜',
                 'm__collection_id' => '165',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          157 => 
          array (
                 'id' => 158,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '郡上踊り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '100',
                 'comments' => '城下町郡上八幡で毎年7月中旬から9月上旬にかけて30夜以上にわたり行われる日本一長い盆踊りです。中でも、毎年8月13から16日の4日間、夜の8時から明け方まで夜通し踊りつづける『徹夜おどり』は最も盛り上がります。400以上の歴史があり、「見るおどり」ではなく「踊るおどり」といわれ、地元の人も観光客もひとつの輪になって踊るという楽しさが人気となっています。',
                 'prefectures' => '岐阜',
                 'm__collection_id' => '166',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          158 => 
          array (
                 'id' => 159,
                 'm__tour_id' => '9',
                 'checkpoint_title' => 'モネの池',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '135',
                 'comments' => '関市にある「名もなき池」は、通称「モネの池」と呼ばれ美しい池として近年人気の観光地となりました。
                 透明度の高い湧水に睡蓮の花が咲き、その中を泳ぐ錦鯉の姿が、まるでモネの代表作「睡蓮」のように映え、新たなフォトスポットとしてSNSで話題となりました。',
                 'prefectures' => '岐阜',
                 'm__collection_id' => '167',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          159 => 
          array (
                 'id' => 160,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '犬山城下町',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '155',
                 'comments' => '"日本最古の木造建築の国宝犬山城から南に延びる城下町は、戦火にあっていないことから現在も江戸時代と変わらない町割りがそのまま残ります。当時は商人や職人の同業者を近くに住まわせて、町の発展を促したとされ、鍛冶屋町・魚屋町などの町名に名残が見られます。
                 現在城下町には食べ歩きグルメが充実しており、お城観光がてらに色々なお店を回るのもおすすめです。',
                 'prefectures' => '愛知',
                 'm__collection_id' => '168',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          160 => 
          array (
                 'id' => 161,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '名古屋城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '180',
                 'comments' => '慶長14年(1609)、徳川家康が天下統一の最後の布石として建てたのがこの名古屋城で、以来尾張徳川家の居城とされました。戦災で焼失しました1959年(昭和34年)、五層の大天守閣(約48m)と小天守閣(約24m)が再建されました。金シャチホコが乗った天守閣は国内最大級です。',
                 'prefectures' => '愛知',
                 'm__collection_id' => '169',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          161 => 
          array (
                 'id' => 162,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '龍城神社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '215',
                 'comments' => '龍城神社(たつきじんじゃ)」は、徳川家康公の誕生の地でもある岡崎城の隣に鎮座しています。
                 岡崎城を築城した時に、龍が現われ城の井戸から水を噴出させて昇天したという昇龍伝説が残ります。岡崎城の隣にあり、出世、安産、厄除、開運を祈願するパワースポットとして人気を呼んでおり、この井戸は現在も「龍の井」とされ、出世、開運などのご加護あるといわれております。',
                 'prefectures' => '愛知',
                 'm__collection_id' => '170',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          162 => 
          array (
                 'id' => 163,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '豊川稲荷',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '245',
                 'comments' => '日本三大稲荷として有名な愛知の豊川稲荷。商売繫盛のご利益があると古くから多くの参拝者が訪れますが、実は1441年開創の曹洞宗のお寺で、正式名称は「豊川閣妙厳寺」といい、約580年前の室町時代(1441年)に創建されました。
                 中でも境内にある霊狐塚は、参拝者が奉納した大小1000点以上の狐の石像が並び不思議なパワーを感じます。',
                 'prefectures' => '愛知',
                 'm__collection_id' => '171',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          163 => 
          array (
                 'id' => 164,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '手筒花火',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '豊橋が発祥の地と言われる手筒花火は、直径10cm、長さ約80cmの節を抜いた孟宗竹(もうそうちく)の中に火薬を詰めたもので、噴出する花火を脇や腹に抱えて打上げます。天に向かって火の粉を噴射させ、最後には「バン！」と大きな音を立てて底が破裂するスリリングな花火です。無病息災や五穀豊穣、家運隆盛を祈る神事として伝えられてきました。',
                 'prefectures' => '愛知',
                 'm__collection_id' => '172',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          164 => 
          array (
                 'id' => 165,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '浜名湖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '265',
                 'comments' => 'うなぎ養殖発祥の地とも言われる浜名湖。
                 出荷量や生産量、そして一世帯あたりの消費量も非常に多く、その美味しさも抜群です。
                 近隣の浜松市にはうなぎ屋が点在し、フワフワ・トロトロのうなぎ堪能することができます。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '173',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          165 => 
          array (
                 'id' => 166,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '静岡茶',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '295',
                 'comments' => '静岡県で栽培されているお茶で代表的なのが「やぶきた」というチャノキの品種です。牧之原台地、富士山麓、安倍川、天竜川、大井川などお茶の栽培に適した自然環境を活かした銘産地が並びます。主にやぶきたなどの煎茶や深蒸し茶の産地が主流ですが、岡部町は玉露の産地としても有名です。明治維新のころ、徳川藩士などによる牧之原台地の開墾により、日本一のお茶生産地となりました。現在では全国の約4割は静岡で生産されています。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '174',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          166 => 
          array (
                 'id' => 167,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '逢菜橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '325',
                 'comments' => '島田市・大井川にかかる蓬莱橋(ほうらいばし)は、全長897.4メートル、通行幅2.4メートルの木造歩道橋です。現在も農道として利用されており、国内でも数少ない賃取橋(ちんとりばし)として有名で、平成9年12月30日には「世界一の長さを誇る木造歩道橋」としてギネス記録に認定されました。また、長い木＝長生きの橋、全長897.4(やくなし＝厄無し」として厄払いや長寿のご利益スポットでも人気です。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '175',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          167 => 
          array (
                 'id' => 168,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '三保の松原',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '360',
                 'comments' => '富士山頂から南西に約45km離れた静岡市清水区にある三保半島は、沿岸の約5kmにわたり松林が続いています。
                 この松林が「三保松原」と呼ばれ、海岸の松原越しに富士山を望むことができる場所として、大正11年(1922)に日本初の名勝に指定されました。
                 なお、松原の中央付近にある「羽衣の松」は天女と地元の漁師の出会いを描いた「羽衣伝説」の舞台としても有名です。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '176',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          168 => 
          array (
                 'id' => 169,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '富士宮やきそば',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '395',
                 'comments' => '富士宮やきそばの特徴は、水分が少なくコシのある麺、ラードを絞った後に出る「かす」を油であげた「肉かす」を具材に加えてあること、仕上げにイワシの削り粉をかかっていること、富士山の湧き水を使っていること。
                 通常のやきそばと異なり、蒸してから冷やすことで弾力がある麺となり、その食感と味にやみつきになる人が多数出るローカルフードです。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '177',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          169 => 
          array (
                 'id' => 170,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '韮山反射炉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '435',
                 'comments' => '江戸時代末期、欧米諸国から日本(江戸)を守るため、韮山代官・江川太郎左衛門英龍が幕府に進言して安政4年(1857)に築いた大砲鋳造炉です。
                 元治元年(1864)の使用中止まで、品川沖に作られたお台場(砲台)のものを含む大小の大砲数百門を鋳造しました。
                 現存するのは３基で、その中でも最も保存状態が良く、平成27年7月に世界文化遺産に登録されました。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '178',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          170 => 
          array (
                 'id' => 171,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '河津桜',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '470',
                 'comments' => '河津町はこの河津桜発祥の地で、河津川沿いの約３キロの堤防には約800本ほど、町全体では約8000本の河津桜が咲きます。例年2月上旬頃から開花し、約１ヶ月ほど楽しむことができます
                 開花に合わせ河津桜まつりも開催され、屋台や催し物、夜間には桜のライトアップも行われ夜桜見物も楽しめます。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '179',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          171 => 
          array (
                 'id' => 172,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '熱海梅園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '505',
                 'comments' => '明治19(1886年)開設の梅園。4.4ヘクタールの敷地内には、樹齢100年を超える古木を含め60品種・469本の梅の木が植えられています。早咲きの品種が最も多く、1月中旬～3月上旬に開催される「熱海梅園梅まつり」は日本一早い梅まつりとして毎年多くの観光客が訪れます。
                 また、紅葉樹は約380本もあり、11月中旬～12月上旬にはもみじまつりも開催されています。',
                 'prefectures' => '静岡',
                 'm__collection_id' => '180',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          172 => 
          array (
                 'id' => 173,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '箱根',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '535',
                 'comments' => '箱根町は都心から一番近い観光地として時期を問わず多くの観光客が訪れます。
                 温泉のほか、箱根登山鉄道沿線に咲くあじさい、仙石原のススキ、いまだに火山活動が続く爆裂火口跡の大涌谷、箱根火山のカルデラ湖を遊覧できる芦ノ湖、パワースポットとして有名な箱根神社など、四季折々に楽しめるスポットがたくさんあります。',
                 'prefectures' => '神奈川',
                 'm__collection_id' => '181',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          173 => 
          array (
                 'id' => 174,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '江ノ島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '570',
                 'comments' => '江の島は、 藤沢市湘南エリアも位置する島で、日本百景にも選ばれている景勝地です。江戸時代の浮世にも描かれた長い歴史を持つ場所でもあります。
                 映画やドラマなどでもデートシーンで使われることも多いことや、島内の「江島神社」は縁結びのご利益があるとデートスポットとしても人気があります。
                 夏には湘南エリアにたくさんの海水浴客が訪れ、夏の定番スポットとしても有名です。',
                 'prefectures' => '神奈川',
                 'm__collection_id' => '182',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          174 => 
          array (
                 'id' => 175,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '鎌倉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '580',
                 'comments' => '山に囲まれ、目の前には海が広がる自然豊かな鎌倉は、鎌倉時代に政治の中心地として栄えた場所で、現在は数多くのお寺と神社が点在する観光地です。鎌倉大仏・パワースポット・絶景・四季折々の草花・グルメなど、見どころがたくさんあり、時期を問わず様々な楽しみ方ができます。',
                 'prefectures' => '神奈川',
                 'm__collection_id' => '183',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          175 => 
          array (
                 'id' => 176,
                 'm__tour_id' => '9',
                 'checkpoint_title' => 'よこすか海軍カレー',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '595',
                 'comments' => '港町である横須賀は、昔から海軍の港として発展してきました。明治時代、栄養不足により病気にかかる日本人兵士が多く、体格の良いイギリス海軍の食事だった「カレーシチュー」を参考に日本人好みにアレンジされたのが、現在の形のカレーライスとなりました。
                 なお、日本の明治時代後期(1900年頃)の書物「海軍割烹術参考書」という海軍食のレシピ本をもとに復元されたものを「よこすか海軍カレー」と呼びます。',
                 'prefectures' => '神奈川',
                 'm__collection_id' => '184',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          176 => 
          array (
                 'id' => 177,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '横浜中華街',
                 'checkpoint_category' => '終了',
                 'distance' => '620',
                 'comments' => '横浜市中区にある横浜中華街は、現在では、600軒以上の店がひしめいおり、世界最大級の規模を誇ります。中華街で見かける個性的な門は、風水思想に基づいて建てられた「牌楼(パイロウ)」。中華街のパワースポットで人気の商売繁盛の神様を祀った「関帝廟」など見どころもたくさんあります。',
                 'prefectures' => '神奈川',
                 'm__collection_id' => '185',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),



          177 => 
          array (
                 'id' => 178,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '六甲山',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '神戸市の西から北へ連なる六甲山は、ケーブルカーやロープウェーを利用し、簡単に登ることができます。山頂には牧場やオルゴールミュージアム、植物園といったの観光スポットが多くあり、中でも日本三大夜景の一つである摩耶山からの夜景は、神戸から関空まで一望できる、人気絶景スポットです。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '187',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          178 => 
          array (
                 'id' => 179,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '神戸北野異人館街',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '35',
                 'comments' => '"現在でも日本の主要な国際貿易港のひとつである神戸港は、1868(慶応3)年、函館・長崎・横浜についで開港された港です。古くからたくさんの外国人関係者を迎え入れていました。
                 神戸市中央区北野町の一帯は、外国人の居留地として日本が家や土地を貸し出したエリアで、明治から大正時代に建てられた洋館が、21も残っており、見学ができる施設も多くあります。
                 "',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '188',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          179 => 
          array (
                 'id' => 180,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '明石焼き',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '65',
                 'comments' => '明石市は新鮮なたこが水揚げされることでも有名ですが、そのたこを使用したたこの石焼きは、だし汁に浸して食べる郷土料理として全国的にも有名です。だし汁の風味と、卵たっぷりの生地はとてもやさしい味わいです。主な材料は小麦粉、卵、たことシンプルのため「卵焼き」と呼ばれることもあります。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '189',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          180 => 
          array (
                 'id' => 181,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '姫路城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '100',
                 'comments' => '日本100名城にも選定されている兵庫県姫路市の国宝「姫路城」。慶長14(1609)年に赤松貞範により建築された大天守は白漆喰の城壁が特徴で、白鷺のように見える姫路城は、別名白鷺城(はくろじょう・しらさぎじょう)とも呼ばれます。黒田重隆が城郭やのちに豊臣秀吉となる羽柴秀吉など、さまざまな武将や大名によって治められ、建て替えや拡張が行われてきました。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '190',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          181 => 
          array (
                 'id' => 182,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '赤穂',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '135',
                 'comments' => '赤穂市は歌舞伎の演目や時代でも有名な「忠臣蔵」の題材となる、四十七名の赤穂浪士の故郷です。市内には赤穂浪士を祀る「大石神社」や、「赤穂城跡」、毎年開催れている「赤穂義士祭」など、ゆかりの地ならではの観光スポットがたくさんあります。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '191',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          182 => 
          array (
                 'id' => 183,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '備前焼',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '155',
                 'comments' => '備前焼は、一点ずつ成形し、乾燥させたのち、絵付けもせず釉薬も使わずそのまま焼いたもので、茶褐色の粘土の鉄分がよく表れている焼き物です。土の性質や、窯への詰め方や窯の温度の変化、焼成時の灰や炭などによって生み出される備前焼は、一つとして同じ色、同じ模様にはなりません。火は、1200〜1300度の高温で最低でも7日間、長い場合は10～12日間もの間炊き続けられます。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '192',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          183 => 
          array (
                 'id' => 184,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '桃太郎',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '180',
                 'comments' => 'むかしばなしで有名な桃太郎のお話は、岡山に伝わる桃太郎伝説「吉備津彦命(きびつひこのみこと)の温羅(うら)退治です」がルーツとなっています。岡山市内にある「吉備津神社」はまさに「桃太郎」発祥の地としても有名な場所。その他にも鬼城山や矢喰宮など伝説にまつわる観光スポットが点在しています。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '193',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          184 => 
          array (
                 'id' => 185,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '国産ジーンズ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '215',
                 'comments' => '倉敷市にある児島地区は、瀬戸内海に面した港町です。そのため塩分を含む土が稲作には向かず、綿花栽培が盛んに行われたことで、繊維産業の町として独自に発展しました。元々大正以降は学生服の製造で全国トップシェアでしたが、時代が合繊に代わり窮地に追い込まれたところで、ジーンズ製造に打って出たことが始まりです。ここ児島は言わずと知れた国産ジーンズ発祥の地。一つ一つ手作業で作ること、日本の伝統的な「藍染め」技術が高く評価され国内外から愛されています。現在児島地区には「児島ジーンズストリート」があり、国産ジーンズショップが集まる人気スポットとなっています。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '194',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          185 => 
          array (
                 'id' => 186,
                 'm__tour_id' => '10',
                 'checkpoint_title' => 'カブトガニ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '245',
                 'comments' => '笠岡市は生きた化石といわれる国指定天然記念物「カブトガニ」の繁殖地です。世界で唯一のカブトガニ博物館が建ち、展示はもちろん、その研究も行われています。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '195',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          186 => 
          array (
                 'id' => 187,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '鞆の浦',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '福山市の中心部から南に14kmの海岸沿いに位置する鞆の浦。今も白壁土蔵や町家が残る江戸時代の古い町並みが残ります。瀬戸内海航路の要所として発展した鞆の浦は、豪商の屋敷や船番所、古刹などが狭い範囲に立ち並び、気軽に散策が楽しめます。港先端に立つ常夜燈は、鞆の浦のシンボルです。また、鞆の浦は人気アニメ映画のモデルとなった街でもあります。',
                 'prefectures' => '広島',
                 'm__collection_id' => '196',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          187 => 
          array (
                 'id' => 188,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '尾道と猫の細道',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '265',
                 'comments' => '瀬戸内海に面した街「尾道」は、坂道に古寺や民家が並び昭和レトロな港町の景色が今も残り、映画やドラマなど数々の映像作品の舞台としても有名です。
                 また、「猫の細道」は尾道市を拠点に活動する絵師の園山春二氏が作る「福石猫」を、1998年から置き始めたのがきっかけです。現在は道のあちこちに「福石猫」が置いてあり、尾道の名物となっています。
                 さらに街中を散策すると住み着いている猫と遭遇することもあります。
                 「猫の細道」を中心に、尾道は猫好きにはたまらない猫に関するスポットが満載の街です。',
                 'prefectures' => '広島',
                 'm__collection_id' => '197',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          188 => 
          array (
                 'id' => 189,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '大久野島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '295',
                 'comments' => '"竹原市の忠海港から船で約15分の大久野島は、むかし毒ガス工場があったことから「地図から消された島」と呼ばれていました。
                 現在、周囲4キロメートルほどの島には約900羽もの野生のうさぎが棲息し、多くの観光客が訪れます。人懐っこく、間近で一緒に写真を撮ることができる、癒しのスポットです。"',
                 'prefectures' => '広島',
                 'm__collection_id' => '198',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          189 => 
          array (
                 'id' => 190,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '西条酒蔵通り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '325',
                 'comments' => '広島市の西条は酒造りに適した気候や地下水の恵みから「日本三代銘醸地」と呼ばれる酒どころです。西条駅南側に広がる西条酒蔵通りには７軒もの歴史ある酒蔵が並んでいます。オリジナルグッズやSNS映えするここだけのフォトスポット、美味しいグルメやスイーツなども楽しめ、街ブラもおすすめです。',
                 'prefectures' => '広島',
                 'm__collection_id' => '199',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          190 => 
          array (
                 'id' => 191,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '原爆ドーム',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '360',
                 'comments' => '1945年8月6日、午前8時15分に、人類史上初めての原子爆弾が投下されました。原爆投下のほぼ真下に位置しながら、奇跡的にも倒壊せず鉄骨部分がむき出しの状態で残りました。被爆の惨状を今に伝え、核兵器廃絶と恒久平和の大切さを伝えるシンボルとして、1996年世界遺産に登録されました。',
                 'prefectures' => '広島',
                 'm__collection_id' => '200',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          191 => 
          array (
                 'id' => 192,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '厳島神社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '395',
                 'comments' => '"嚴島神社は日本三景のひとつ「安芸の宮島」として毎年多くの観光客が訪れます。
                 創建は推古天皇元年。その後の1168年、平清盛により現在のような寝殿造りの社殿が造られました。廻廊部分は海辺に位置し、潮が満ちると海に浮かぶように見えます。
                 その全建造物は国宝および国の重要文化財であり、平成8(1996)年には周囲の原生林を含め世界遺産に登録されました。
                 参道の宮島表参道商店街は、名物の牡蠣やあなごなど様々なグルメが楽しめます。"',
                 'prefectures' => '広島',
                 'm__collection_id' => '201',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          192 => 
          array (
                 'id' => 193,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '錦帯橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '435',
                 'comments' => '"山口県岩国市にある5連のアーチが美しい国内屈指の木造橋の「錦帯橋」は、奇跡の名橋ともいわれ日本三名橋の一つです。寛文13年(1673)、両岸に広がる城下町を繋ぐ橋として、岩国藩主・吉川氏によって建造されました。
                 それまでの橋は洪水の度に流されており、何度も研究を重ね完成されました。
                 橋の周辺は、春は桜、秋は紅葉の名所でもあり、美しい橋と自然のコントラストが楽しめます。"',
                 'prefectures' => '山口',
                 'm__collection_id' => '202',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          193 => 
          array (
                 'id' => 194,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '周南コンビナート',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '470',
                 'comments' => '"周南市の海沿いは化学工場が多く、様々な場所や角度から工場夜景を楽しめます。
                 晴海親水公園から眺める工場夜景は日本夜景遺産に認定されるおすすめスポットです。"',
                 'prefectures' => '山口',
                 'm__collection_id' => '203',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          194 => 
          array (
                 'id' => 195,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '山口ちょうちん祭り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '505',
                 'comments' => '毎年8月6日、7日に山口市内で開催される約600年前から続く盆行事です。室町時代に山口を治めていた大名が父母の冥福を祈るために盆の夜に笹竹の灯ろうをともしたのを起源とし、やがて町民の間に盆行事として広がったといわれています。数千本の竹につけたおよそ10万個ものちょうちんが揺れながら夜の街を彩り赤く染めます。山口の夏の風物詩です。',
                 'prefectures' => '山口',
                 'm__collection_id' => '204',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          195 => 
          array (
                 'id' => 196,
                 'm__tour_id' => '10',
                 'checkpoint_title' => '秋吉台',
                 'checkpoint_category' => '終了',
                 'distance' => '535',
                 'comments' => '美祢市の中・東部に広がる日本最大級のカルスト台地です。1955年に国定公園に、1964年に特別天然記念物に指定されました。この雄大な大地の景観を作り出した石灰石は、今からおよそ3億5千万年前に南方の海でサンゴ礁として誕生したもので、約8千万年もの長い年月をかけて海底を移動しながら大陸の上に隆起し、現在のようなカルスト台地が形成されたといわれています。',
                 'prefectures' => '山口',
                 'm__collection_id' => '205',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          196 => 
          array (
                 'id' => 197,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '大間まぐろ',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '本州の北端、下北半島の最北の地にある大間町は、天然の本マグロが水揚げされることで有名です。
                 津軽海峡の荒波に揉まれ、引き締まった身にたっぷりと脂がのった「大間のマグロ」は黒いダイヤとも呼ばれています。',
                 'prefectures' => '青森',
                 'm__collection_id' => '207',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          197 => 
          array (
                 'id' => 198,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '恐山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '35',
                 'comments' => '下北半島の中心に位置する標高800m以上の活火山で、山全体が霊場になっています。その正式な呼び名は「恐山菩提寺」です。
                 別名「宇曽利山」とも呼ばれている恐山は、日本三大霊山に数えられています。
                 風車がカラカラと回り、荒々しい岩場の合間から硫黄の臭いが立ちこめる様子は、地獄に、宇曽利山湖の白浜は極楽に見立てられています。',
                 'prefectures' => '青森',
                 'm__collection_id' => '208',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          198 => 
          array (
                 'id' => 199,
                 'm__tour_id' => '11',
                 'checkpoint_title' => 'ニホンザル北限地',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '70',
                 'comments' => '下北半島には野生のニホンザルが生息しており、日本国内の分布の北限地です。
                 さらに世界的に見ても霊長類の自然分布の北限地でもあります。',
                 'prefectures' => '青森',
                 'm__collection_id' => '209',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          199 => 
          array (
                 'id' => 200,
                 'm__tour_id' => '11',
                 'checkpoint_title' => 'りんご',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '105',
                 'comments' => '青森県は全国のりんご生産量の約60％を占める日本一のりんご王国です。　明治の初め、青森県に初めて西洋りんごの苗木が移植され栽培が始まりました。',
                 'prefectures' => '青森',
                 'm__collection_id' => '210',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          200 => 
          array (
                 'id' => 201,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '青森ねぶた祭り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '135',
                 'comments' => '毎年8月2～7日に開催される東北三大祭りの一つです。
                 青森市中心部を歌舞伎や神話を題材にした「人形ねぶた」と呼ばれる山車が運行し、「跳人(ハネト)」と呼ばれる踊り子たちが踊り歩きます。',
                 'prefectures' => '青森',
                 'm__collection_id' => '211',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          201 => 
          array (
                 'id' => 202,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '弘前のさくら',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '170',
                 'comments' => '弘前市の弘前公園は毎年桜の季節になると多くの桜が咲き乱れます。
                 見どころは濠の水面に桜の花びらが埋め尽くす「花筏」。ピンクに染まる水面がとても美しく、まるで桜のじゅうたんのようです。
                 桜の期間中は「弘前さくらまつり」が開催されています。',
                 'prefectures' => '青森',
                 'm__collection_id' => '212',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          202 => 
          array (
                 'id' => 203,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '十和田湖と奥入瀬渓流',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '205',
                 'comments' => '青森県と秋田県にまたがる「十和田湖」には、コバルトブルーの美しい湖から流れ出る奥入瀬渓流があります。約14キロメートルの渓流沿いには散策路が設けられ、豊かな樹木や十数か所の滝、川の流れなど写真に収めたくなる景色が満載です。',
                 'prefectures' => '青森',
                 'm__collection_id' => '213',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          203 => 
          array (
                 'id' => 204,
                 'm__tour_id' => '11',
                 'checkpoint_title' => 'きりたんぽ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '240',
                 'comments' => '「きりたんぽ」は、ぶしたうるち米のご飯を杉の棒を先端から包むように巻き付けてこんがり焼いたものです。
                 中でも秋田県の郷土料理として有名なのが、「きりたんぽ鍋」。棒を外して食べやすく切ったものを、季節の野菜や比内地鶏でとった出汁と共に鍋で煮詰めます。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '214',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          204 => 
          array (
                 'id' => 205,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '秋田犬',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '275',
                 'comments' => '「忠犬　ハチ公」でも有名な秋田犬は、奥羽山脈一帯で狩猟犬として飼育されていました。現在ではペットとして世界的に人気がある日本犬です。丸まった尻尾と三角の耳が特徴で、天然記念物に指定されています。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '215',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          205 => 
          array (
                 'id' => 206,
                 'm__tour_id' => '11',
                 'checkpoint_title' => 'なまはげ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '310',
                 'comments' => '晦日の晩に男鹿半島のほぼ全域で行われる行事で、なまはげに扮した集落の男性が、年に一度地域の家々を巡り、怠け心を戒め、無病息災・田畑の実り・山の幸・海の幸をもたらす来訪神として「泣く子はいねがー、親の言うこど聞がね子はいねがー」と家々を練り歩きます。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '216',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          206 => 
          array (
                 'id' => 207,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '秋田竿灯まつり',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '345',
                 'comments' => '毎年8月3日〜6日に秋田市で行われる東北三大祭りのひとつ。
                 長い竹竿にたくさんの提灯を吊り下げた「竿燈」を、男性が支えながら歩くというダイナミックなお祭りです。竿燈全体を稲穂に、吊るされた提灯を米俵に見立て、五穀豊穣を祈願します。
                 約280本の竿燈と約10,000個の提灯が夜空を彩ります。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '217',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          207 => 
          array (
                 'id' => 208,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '稲庭うどん',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '365',
                 'comments' => '約350年の歴史を誇る「稲庭うどん」は、江戸時代の初期に地元産の小麦粉を使って干しうどんを製造したのが始まりとされています。
                 なめらかな舌ざわりと、つるつるとしたのどごしが特徴で、日本三大うどんの1つとして高い評価を得ています。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '218',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          208 => 
          array (
                 'id' => 209,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '花火の街・大曲',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '385',
                 'comments' => '大仙市の大曲は三代花火競技大会のひとつの夏の大曲の花火で有名ですが、四季により異なるテーマの花火を楽しめるよう「四季の花火」として、先を通じて開催されます。さらに毎月何らかの花火大会が催される花火の街です。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '219',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          209 => 
          array (
                 'id' => 210,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '角館',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '405',
                 'comments' => '江戸時代に栄えた城下町で、「みちのくの小京都」と呼ばれる角館は、武家屋敷をはじめとした古くからの建造物が数多く現存しています。桜、新緑、紅葉、雪景色と四季折々に楽しめますが、特に桜の名所として有名です。武家屋敷の黒塀に映える、シダレザクラは美しく、約400本のシダレザクラが並びます。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '220',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          210 => 
          array (
                 'id' => 211,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '田沢湖',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '425',
                 'comments' => '秋田県中東部に位置する「田沢湖」は、水深は最大で423.4mもあり、日本で最も深い湖です。また、金色に輝く田沢湖のシンボル「たつこ像」のモチーフとなった「辰子姫の伝説」も有名です。辰子姫は永遠の美を願ったために龍の姿になったと伝えられており、神秘的なスポットして人気の観光地です。',
                 'prefectures' => '秋田',
                 'm__collection_id' => '221',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          211 =>
          array (
                 'id' => 212,
                 'm__tour_id' => '11',
                 'checkpoint_title' => 'チャグチャグ馬コ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '460',
                 'comments' => '毎年6月の第2土曜日に色鮮やかな装束で着飾った100頭程の馬と馬主が、滝沢市鬼越蒼前(おにこしそうぜん)神社から盛岡八幡宮までの約13キロの道のりを約4時間かけて行進します。馬が歩くたびにチャグチャグと鳴る鈴の音が名称の由来といわれています。',
                 'prefectures' => '岩手',
                 'm__collection_id' => '222',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          212 =>
          array (
                 'id' => 213,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '盛岡冷麺',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '480',
                 'comments' => '本場・朝鮮半島出身者が昭和29年頃に盛岡で冷麺を作ってみたのが盛岡冷麺の始まりです。最大の特徴は、ジャガイモのでんぷんを使って固めた腰の強い麺。噛めば噛むほど味が出る麺は、牛の旨味が凝縮された牛骨スープとの相性がばっちりで、やみつきになります。',
                 'prefectures' => '岩手',
                 'm__collection_id' => '223',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          213 =>
          array (
                 'id' => 214,
                 'm__tour_id' => '11',
                 'checkpoint_title' => 'わんこそば',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '515',
                 'comments' => '1口分のそばを給仕さんがリズミカルにお椀の中へ投げ入れることで知られる「わんこそば」ですが、食べ方などは各地域で異なります。もともと盛岡や花巻などの地域では客人をもてなすのに、そばを振舞う風習がありました。一度に大勢の客にゆでたてを振舞うため、少量ずつお椀に盛って出すしたことが始まりとされています。',
                 'prefectures' => '岩手',
                 'm__collection_id' => '224',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          214 =>
          array (
                 'id' => 215,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '河童',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '550',
                 'comments' => '遠野市には河童伝説や座敷童などの多くの民話が残ります。
                 中でも、今もまだ河童が現れるといわれている「かっぱ淵」と呼ばれる小川が有名です。
                 釣り竿のレンタルもあり、「カッパ捕獲許可証」があれば誰でも河童釣りに挑戦できます。',
                 'prefectures' => '岩手',
                 'm__collection_id' => '225',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          215 =>
          array (
                 'id' => 216,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '三陸・リアス式海岸',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '585',
                 'comments' => '東北太平洋岸の北部は、面上昇や地盤沈下を繰り返して出来上がったリアス式海岸です。海と山が隣り合う非常に入り組んだ地形が絶景を生み出し、その入江は良質な漁港や帆立・カキ・ホヤ等の養殖場となっています。',
                 'prefectures' => '岩手',
                 'm__collection_id' => '226',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          216 =>
          array (
                 'id' => 217,
                 'm__tour_id' => '11',
                 'checkpoint_title' => '瓶ドン',
                 'checkpoint_category' => '終了',
                 'distance' => '620',
                 'comments' => '宮古のご当地グルメとして注目されている「瓶ドン」は、
                 いくらやウニなどの三陸の海の幸が牛乳瓶にぎゅうぎゅうに詰まっており、それをごはんへかけて食べる、見た目も味もインパクトのあるご当地丼です。
                 岩手県沿岸では獲れたてのウニを牛乳瓶に詰めて保存するスタイルが一般的ですが、そこからヒントを得て作られました。',
                 'prefectures' => '岩手',
                 'm__collection_id' => '227',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          217 =>
          array (
                 'id' => 218,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '下関ふぐ',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '漁場が充実していたこともあり、古くよりふぐの集積地となっていた下関。それにより加工や調理の技術にも磨きがかかり、下関ではふぐ食の文化が身近なものとして定着しました。下関ではふぐのことを「ふく」と呼び、これは「福」にあやかり縁起が良いとも言われています。',
                 'prefectures' => '山口',
                 'm__collection_id' => '229',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          218 =>
          array (
                 'id' => 219,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '瓦そば',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '25',
                 'comments' => '山口県下関市豊浦町川棚のソウルフード。
                 茶そばやお肉を熱した瓦の上で焼き、温かいつゆにつけて食べる少し変わったスタイルが特徴です。
                 しっとりとした麺とカリカリっとした麺のおこげがやみつきになります。舌はもちろん目や耳でも楽しめる大人気の料理です。',
                 'prefectures' => '山口',
                 'm__collection_id' => '230',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          219 =>
          array (
                 'id' => 220,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '角島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '55',
                 'comments' => '下関市豊北町の「角島」と本土を結ぶために架かる「角島大橋」は、通行料無料の橋としては日本屈指の長さ1,780mを誇り、さらに絶景が楽しめる橋としてメディアでも多く取り上げられています。
                 エメラルドグリーンの海に真っ直ぐ延びていく橋が美しいとSNSでも話題となりました。',
                 'prefectures' => '山口',
                 'm__collection_id' => '231',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
         

          220 =>
          array (
                 'id' => 221,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '元乃隅神社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '90',
                 'comments' => '長門市にある「元乃隅神社」は、昭和30年地域の網元であった岡村斉(おかむらひとし)さんの枕元に現れた白狐のお告げにより建立されました。商売繁盛、大漁、海上安全、さらに良縁、子宝、開運厄除、福徳円満、交通安全、学業成就などのご利益があるといわれてます。昭和62年から10年間かけて奉納された123基の鳥居が、天然記念物の龍宮の潮吹側から100ｍ以上にわたって並ぶ景色は圧巻です。',
                 'prefectures' => '山口',
                 'm__collection_id' => '232',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          221 =>
          array (
                 'id' => 222,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '別府弁天池',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '125',
                 'comments' => '美祢市・別府厳島神社の境内に湧き出る、透き通ったコバルトブルーの池。秋吉台のカルスト地形で長い時間かけられて濾過された水は、カルシウムやミネラル成分を多く含み、「名水百選」に選定されています。湧き出ている隣にはこの水を利用した養鱒場があり、マス釣りやマス料理が楽しめます。',
                 'prefectures' => '山口',
                 'm__collection_id' => '233',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          222 =>
          array (
                 'id' => 223,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '明治維新胎動の地・萩',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '160',
                 'comments' => '白壁となまこ壁や黒板塀の江戸時代の美しい城下町が続き、吉田松陰・高杉晋作など維新の志士ゆかりの地が点在する歴史のまちです。
                 世界遺産に登録されたスポットも点在しています。',
                 'prefectures' => '山口',
                 'm__collection_id' => '234',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          223 =>
          array (
                 'id' => 224,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '鷺舞神事(さぎまいじんじ)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '195',
                 'comments' => '津和野の弥栄神社に伝わる古典芸能神事で、京都発祥でありながら、現在まで廃絶することなく奉納され続けている唯一の鷺舞であり、国の重要無形民俗文化財に指定されています。
                 毎年7月20日と27日に町内の定められた場所で行われており、唄や囃子にあわせて真っ白い羽を広げて舞う姿は優雅で美しく観光客を魅了します。',
                 'prefectures' => '島根',
                 'm__collection_id' => '235',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          224 =>
          array (
                 'id' => 225,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '松葉ガニ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '230',
                 'comments' => 'ズワイガニのうち、成長した雄を山陰地方では「松葉がに」と呼び、水揚げされる地方によってその呼称が違います。ぎっしりと詰まった身と上品な旨味が味わえます。',
                 'prefectures' => '島根',
                 'm__collection_id' => '236',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          225 =>
          array (
                 'id' => 226,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '浜田の赤天',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '265',
                 'comments' => '魚のすり身に赤とうがらしを練り込んだ、ピリ辛が絶品のB級グルメ。
                 パン粉をつけて揚げてあるので、サクサクとした食感も特徴です。',
                 'prefectures' => '島根',
                 'm__collection_id' => '237',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          226 =>
          array (
                 'id' => 227,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '石見銀山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '300',
                 'comments' => '世界遺産にも登録されている大田市の「石見銀山」は、戦国時代後期から江戸時代前期にかけて大量の銀を産出し、アジアはもちろんヨーロッパ諸国とも交流をもたらしました。かつて銀を採掘していた坑道跡、坑道跡の龍源寺間歩につながる大森の町並みは当時の面影を残し、現在も人々が生活をしています。',
                 'prefectures' => '島根',
                 'm__collection_id' => '238',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          227 =>
          array (
                 'id' => 228,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '神話の国・出雲',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '335',
                 'comments' => '多くの神話が残る出雲地方は、縁結びの神様として有名な「出雲大社」をはじめ、パワースポットが多く存在し、歴史ある街です。
                 旧暦10月は、出雲の国に全国の八百万(やおよろず)の神々が会議のために集まるといわれており「神在月」と呼ばれます。また、他の土地では神様が留守になるので「神無月」といいます。
                 この期間は様々なご縁が結ばれるといわれ、多くの人が出雲へ訪れます。',
                 'prefectures' => '島根',
                 'm__collection_id' => '239',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          228 =>
          array (
                 'id' => 229,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '宍道湖しじみ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '360',
                 'comments' => '水と淡水が入り混じる宍道湖は、日本で一番おいしいとされるヤマトシジミが多く生息します。宍道湖のヤマトシジミは粒が大きく肉厚、食べて美味、そして体に良い栄養分を多く含みます。約300名のシジミ漁業者が、漁をする風景は宍道湖の風物詩となっています。',
                 'prefectures' => '島根',
                 'm__collection_id' => '240',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          229 =>
          array (
                 'id' => 230,
                 'm__tour_id' => '12',
                 'checkpoint_title' => 'ベタ踏み坂',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '385',
                 'comments' => '通称「ベタ踏み坂」とは、鳥取と島根の県境を結ぶ「江島大橋」の島根県側の坂の部分のこと。テレビCMで登場し有名となりました。
                 大根島北西岸沿いから望遠レンズを使って撮ると、自動車が空に向かって駆け上がっていくような急勾配の江島大橋の写真になります。',
                 'prefectures' => '島根',
                 'm__collection_id' => '241',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          230 =>
          array (
                 'id' => 231,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '皆生温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '400',
                 'comments' => '米子市の日本海に面した海辺の温泉地。皆生温泉のお湯は、海中から湧き出る別名を｢塩の湯｣と呼ばれ、塩分濃度が濃く、保湿効果が高いことから美容効果も期待されています。
                 海水浴場としても人気があり、幾つものお椀が連なったような、独特な地形をした砂浜が特徴です。毎年トライアスロンの大会も行われます。',
                 'prefectures' => '島根',
                 'm__collection_id' => '242',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          231 =>
          array (
                 'id' => 232,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '満正寺(まんしょうじ)',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '440',
                 'comments' => '元禄12年(1699年)、池田藩城代の荒尾志摩の菩提寺として創建されました。満正寺に古来より伝わる秘伝星占術を現代風にアレンジした直径8メートルもの巨大星占盤「九曜星占盤」を使って、性格・恋愛・対人関係などを占うことができます。生年月日から星を算出し、性格・恋愛・相性・対人関係を占います。',
                 'prefectures' => '島根',
                 'm__collection_id' => '243',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          232 =>
          array (
                 'id' => 233,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '二十一世紀梨',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '470',
                 'comments' => '青梨の代表品種の1つで、鳥取県が全国一の生産量を誇る産地として有名です。大きさは300gくらいで果皮は黄緑色。甘みの中にさわやかな酸味を持ち、やわらかな果肉は果汁を多く含んでいるのが特徴です。',
                 'prefectures' => '島根',
                 'm__collection_id' => '244',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          233 =>
          array (
                 'id' => 234,
                 'm__tour_id' => '12',
                 'checkpoint_title' => '鳥取砂丘',
                 'checkpoint_category' => '終了',
                 'distance' => '490',
                 'comments' => '東西16km、南北2.4kmに広がり、最大高低差は約90mという日本最大級の砂丘です。自然の創り出す「風紋」・「砂簾」・「砂柱」も見どころのひとつで、美しい砂丘を堪能するためのアクティビティもたくさんあります。',
                 'prefectures' => '鳥取',
                 'm__collection_id' => '245',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          234 =>
          array (
                 'id' => 235,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '万博記念公園',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '1970年に大阪府吹田市で開催された日本万国博覧会(大阪万博)の跡地を整備した公園です。
                 公園のシンボルでもある「太陽の塔」を中心に自然文化園や、日本庭園、国立民族学博物館、大阪日本民芸館など様々な施設があります。',
                 'prefectures' => '大阪',
                 'm__collection_id' => '247',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          235 =>
          array (
                 'id' => 236,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '大阪城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '20',
                 'comments' => '大坂城は全国統一の本拠地を大阪とした豊臣秀吉によって天正11年(1583)に築造が開始され、15年の歳月をかけ完成されました。その後再建と消失を繰り返し、平成9年に行われた「平成の大改修」により今の姿となりました。
                 大坂城の遺跡のうち、国の重要文化財に指定されているのは13棟で、すべて江戸時代に建てられた物です。',
                 'prefectures' => '大阪',
                 'm__collection_id' => '248',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          236 =>
          array (
                 'id' => 237,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '粉もん',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '40',
                 'comments' => '関西圏では小麦粉料理を親しみを込め「粉もん」と呼んでいます。
                 中でもくいだおれの街としても有名な大阪は「粉もん」料理の宝庫です。
                 お好み焼き、たこ焼き、うどんなどなど、老若男女を問わず愛される粉もん料理のお店がたくさんあります。',
                 'prefectures' => '大阪',
                 'm__collection_id' => '249',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          237 =>
          array (
                 'id' => 238,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '岸和田だんじり祭り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '60',
                 'comments' => '日本各地で行われるだんじり祭りの中でも有名なのが岸和田市で行われる「岸和田だんじり祭」です。江戸時代中期にはじまり、およそ300年の歴史と伝統を誇ります。一番の見どころはダイナミックな引き回しです。街中を何周も何周も駆け巡り、曲がり角で「やりまわし」を行う勇敢な姿に魅了されます。
                 だんじりとは、山車(だし)を意味する西日本の方言です。',
                 'prefectures' => '大阪',
                 'm__collection_id' => '250',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          238 =>
          array (
                 'id' => 239,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '泉州水なす',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '80',
                 'comments' => '大阪南部の泉州地域の特産品で、生でも食べられるほどみずみずしいのが特徴です。栽培が難しく選別基準も厳しいため最高級品は夏の間のみほとんど市場に出回りません。全国的には漬物が有名です。',
                 'prefectures' => '大阪',
                 'm__collection_id' => '251',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          239 =>
          array (
                 'id' => 240,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '紀州梅',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '105',
                 'comments' => '和歌山県は、江戸時代に本格的な梅栽培の始まったとされ、明治に入り梅干しの生産も始まりました。昭和に入ると優良品質の梅が栽培され始め、紀州産の南高梅は梅干で一番美味しいとも言われるようになりました。',
                 'prefectures' => '和歌山',
                 'm__collection_id' => '252',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          240 =>
          array (
                 'id' => 241,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '醤油発祥の地',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '140',
                 'comments' => '熊野古道の宿場町として、古くから栄えた和歌山県の湯浅町は、醤油発祥の地としても有名な町です。
                 醤油の醸造業で発展した町並みには、醸造業に関連する町家や土蔵が建ち並び、老舗の醤油醸造家から醤油の香りが漂います。',
                 'prefectures' => '和歌山',
                 'm__collection_id' => '253',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          241 =>
          array (
                 'id' => 242,
                 'm__tour_id' => '13',
                 'checkpoint_title' => 'なれ寿司',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '170',
                 'comments' => '「なれずし」いわゆる一般的な寿司とは違って、主に魚と塩と米飯を長期間漬け込んで乳酸発酵させた食品です。日本各地に郷土料理としてありますが、和歌山県のなれ寿司の特徴は数時間～数日間発酵させた「早なれ」といい、飯の上に塩漬けにしたサバをのせ、イネ科の植物の葉アセで巻き、重石で押して発酵させます。
                 発酵期間が短いため、発酵食品独特のにおいや、酸味が少なくなれ寿司の中でも食べやすいとされています。',
                 'prefectures' => '和歌山',
                 'm__collection_id' => '254',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          242 =>
          array (
                 'id' => 243,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '熊野古道',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '200',
                 'comments' => '「熊野古道」は、和歌山県紀伊半島にある熊野三山と伊勢や大阪、高野及び吉野とを結ぶ古い街道の総称です。世界遺産「紀伊山地の霊場と参詣道」に登録されています。熊野詣は日本人の巡礼の起源ともいわれ、古くより多くの人が訪れました。現在でも大樹などの自然や江戸時代の石畳などの史跡を見られ、パワースポットとしても注目されています。',
                 'prefectures' => '和歌山',
                 'm__collection_id' => '255',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          243 =>
          array (
                 'id' => 244,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '龍神温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '230',
                 'comments' => '田辺市龍神村の日高川の渓流沿いに位置し、古くから熊野信仰の名湯として知られ、江戸時代には歴代の紀州徳川藩主の別荘地として栄えた歴史ある名湯です。「日本三美人の湯」としても知られています。',
                 'prefectures' => '和歌山',
                 'm__collection_id' => '256',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          244 =>
          array (
                 'id' => 245,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '高野山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '260',
                 'comments' => '「紀伊山地の霊場と参詣道」の一部でもある高野山は、高野山全体を「総本山金剛峯寺」とし、「一山境内地」と考えに基づいて、弘法大師「空海」が高野山を切り開き創られた、真言密教発祥の地として有名です。山内は「奥之院」と「壇上伽藍」を二大聖地とし、今も人々の信仰を集めています。現在、高野山には117もの寺院があり、約4,000人が居住しており、そのうち1,000人ほどが真言密教のお坊さんで、修行をしながら生活をしています。',
                 'prefectures' => '和歌山',
                 'm__collection_id' => '257',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          245 =>
          array (
                 'id' => 246,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '柿の葉寿司',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '290',
                 'comments' => '奈良を代表する郷土料理の柿の葉寿司は、江戸時代中期ごろの柿が産地だった五條や吉野川流域の家々で親しまれていたのが始まりといわれています。
                 当時は保存のきくよう柿の葉で包んで重石をのせ3日ほど醗酵させていたため、一晩寝かせるだけの現在の押し寿司とは違い、なれ寿司だったそう。
                 現在の「柿の葉寿司」の一番の食べ頃は、一晩寝かせた翌日とおすすめしています。寝かせることで塩角が取れ、すし飯に鯖の旨味と柿の葉の香りがしみ込み、熟成した深い味わいになるのです。',
                 'prefectures' => '奈良',
                 'm__collection_id' => '258',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          246 =>
          array (
                 'id' => 247,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '吉野山',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '320',
                 'comments' => '吉野山は、古来より桜の名所として有名です。尾根を埋める桜は3万本ともいわれ、
                 下千本から奥千本まで千本桜が徐々に開花をしていく様は圧巻です。見ごろは4月上旬から下旬。
                 世界遺産「紀伊山地の霊場と参詣道」の霊場の一つでもあります。',
                 'prefectures' => '奈良',
                 'm__collection_id' => '259',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          247 =>
          array (
                 'id' => 248,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '茶粥',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '340',
                 'comments' => '茶がゆは、お茶で炊いたおかゆのことです。西日本に広く伝わる家庭料理ですが、奈良では聖武天皇の時代に食べられていたという記録が残っており、奈良の郷土料理のひとつです。使われるお茶は地域やお店によって異なります。',
                 'prefectures' => '奈良',
                 'm__collection_id' => '260',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          248 =>
          array (
                 'id' => 249,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '奈良公園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '360',
                 'comments' => '自由に歩き回る鹿が目を引く「奈良公園」は、約600ヘクタールもの園内には山林や川などの自然だけでなく、東大寺や興福寺など日本を代表する重要文化財が隣接しており、歴史公園とも言われています。',
                 'prefectures' => '奈良',
                 'm__collection_id' => '261',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          249 =>
          array (
                 'id' => 250,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '宇治の抹茶',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '390',
                 'comments' => '抹茶のブランドといえば京都宇治。
                 宇治は室町時代に、足利義満によっていくつもの指定茶園が作られたことで、お茶の栽培が盛んとなり、さらに鎌倉時代に今の中国にあたる宋より抹茶のルーツが伝わったとされています。
                 現在では、碾茶（抹茶の茶葉）の産地として全国茶品評会で上位に選ばれるほどであり、全国的に有名となりました。',
                 'prefectures' => '京都',
                 'm__collection_id' => '262',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          250 =>
          array (
                 'id' => 251,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '京都四大行事',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '410',
                 'comments' => '京都ではたくさんのお祭り行事が行われていますが、中でも春の「葵祭(あおいまつり)」、夏の「祇園祭(ぎおんまつり)」、秋の「時代祭(じだいまつり)」の3つのお祭りは「京都三大祭り」は古くから親しまれる京都を代表するお祭りです。それぞれ祭りの歴史や意味合いも全く異なります。これに「五山送り火」を加えて「京都四大行事」と呼ばれています。',
                 'prefectures' => '京都',
                 'm__collection_id' => '263',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          251 =>
          array (
                 'id' => 252,
                 'm__tour_id' => '13',
                 'checkpoint_title' => '嵐山',
                 'checkpoint_category' => '終了',
                 'distance' => '430',
                 'comments' => '京都市の西部に位置する嵯峨嵐山。平安時代は貴族の別荘地として愛され、嵯峨嵐山に因んだ和歌も数多く残されています。現在は四季折々の美しい景色や歴史ある神社仏閣などの見どころが数多くあり、京都を代表する観光スポットとして人気のエリアです。',
                 'prefectures' => '京都',
                 'm__collection_id' => '264',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          252 =>
          array (
                 'id' => 253,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '金城町石畳道',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '那覇市の首里城から続く長さ300メートルの琉球石灰岩が敷かれた石畳道です。1522(尚真王46)年ごろは造られたと推定され、戦争により現在の長さしか残っていませんが、首里城から南部へ行く道として造られました。両脇に沖縄の古民家があり、風情あふれる場所です。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '266',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          253 =>
          array (
                 'id' => 254,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '糸満ハーレー',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '20',
                 'comments' => '糸満では、毎年旧暦の5月4日に糸満漁港内で海の恵みに感謝し、「大漁」と「航海安全」を祈願して、勇壮なハーレー競漕が行われます。当日は、山巓毛(サンティンモー)という高台でウガン(御願)をすることから始まります。その後のハーレー行事では、西村・中村・新島の３つの古い時代の集落に分かれ、伝統衣装を身にまとう現役海人(うみんちゅ)が熱戦を繰り広げます。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '267',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          254 =>
          array (
                 'id' => 255,
                 'm__tour_id' => '14',
                 'checkpoint_title' => 'シーサー',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '50',
                 'comments' => '沖縄に古くから伝わる守り神です。紀元前にシルクロードを経て13～15世紀頃に中国から伝来しました。主に家の守り神・魔除けとして、沖縄県民の多くの家屋に設置されています。2体のうち、口を開けているものがオス・口を閉じているものがメスで、右側にオス、左側にメスを置くことが正しいとされています。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '268',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          255 =>
          array (
                 'id' => 256,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '斎場御嶽',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '70',
                 'comments' => '南城市にある斎場御嶽(せいふぁうたき)は、琉球王朝時代に国家的な祭事が行われてきた沖縄最高の聖地です。球の始祖「アマミキヨ」が造ったとされ、琉球の最高神女であった「キコエオオキミ」の就任の儀式が執り行われました。国の催事も行われていたため首里城と関わりの深い場所でもあります。
                 多くの先人たちが祈りを捧げてきた場所であるため強いエネルギーを感じられるパワースポットです。2000年12月に「琉球王国のグスク及び関連遺産群」の1つとして世界遺産に登録されています。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '269',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          256 =>
          array (
                 'id' => 257,
                 'm__tour_id' => '14',
                 'checkpoint_title' => 'ガジュマルの木',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '95',
                 'comments' => '日本では、沖縄や屋久島などに分布しており、大きいものでは20メートルにも成長します。
                 大きなガジュマルはヒゲのような気根を無数に垂らし、それが太くなると時間をかけ太い幹となり、何本もの幹で自分を支えるようになります。
                 また、精霊が宿る神秘的な木として知られ、沖縄諸島で言い伝えられてきた伝説上の生物「キジムナー」が宿っているともいわれています。「キジムナー」は、家のガジュマルに住み着くと裕福になれるという言い伝えもあり、沖縄の人に古くから愛されています。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '270',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          257 =>
          array (
                 'id' => 258,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '港川外人住宅',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '125',
                 'comments' => '浦添市にある「港川外人住宅街」は、戦後駐留米軍向けの住宅として建てられた場所です。
                 今では65棟ほど残っている外人住居の6割が、レトロな外観や造りを生かして、おしゃれでセンスのよいショップやオフィスとして利用されています。それぞれの通りの入口にもアメリカの州の名前がついた看板が立ち、外国風の作りの建物が並ぶこのエリアはフォトスポットとしても人気を集めています。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '271',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          258 =>
          array (
                 'id' => 259,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '海中道路',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '155',
                 'comments' => 'うるま市内の車で行ける離島4島をつなぐ全長5キロメートルの海中道路は、見渡す限り沖縄の青い海が広がるドライブに人気の道路です。
                 道路の高さが通常の橋よりも低いので、より間近に海を感じられます。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '272',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          259 =>
          array (
                 'id' => 260,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '青の洞窟',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '180',
                 'comments' => '沖縄のシュノーケリング＆ダイビングで人気スポットの読谷村真栄田岬にある「青の洞窟」は、海中に半分沈む洞窟内に、外から太陽光が差し込み、海底に反射した光が洞窟全体を青く照らします。あたり一面が光に包まれる中、魚たちが優雅に泳ぐ姿が見られます。とても神秘的な心が洗われるスポットです！',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '273',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          260 =>
          array (
                 'id' => 261,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '万座毛',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '205',
                 'comments' => '「万座毛」は琉球石灰岩でできた断崖で、岩が象の鼻ににていることでも有名です。
                 18世紀前半に琉球国王の尚敬王が「万人を座するに足る」と賞賛したことから万座毛と名付けられたと伝えられています。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '274',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          261 =>
          array (
                 'id' => 262,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '沖縄そば',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '235',
                 'comments' => '琉球王朝時代に中国から伝わったものとされていますが宮廷料理としてであり、庶民が口にするようになったのは大正時代からといわれています。
                 それぞれの地域でアレンジされており、「宮古そば」・「八重山そば」・「大東そば」など様々です。麺の形状や具のトッピングなど、地域によって主な特徴があります。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '275',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          262 =>
          array (
                 'id' => 263,
                 'm__tour_id' => '14',
                 'checkpoint_title' => '古宇利島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '265',
                 'comments' => '沖縄県今帰仁村の橋で渡れる直径約2キロメートルの離島です。エメラルドグリーンの海の上に造られた古宇利大橋やティーヌ浜から見えるハート型の岩など島内には絶景を楽しめるスポットがたくさんあります。
                 また、古宇利島には「アダムとイヴ」を連想させるような話が伝説として語り継がれており、恋・結婚・子孫繁栄のご利益があるパワースポットとしても有名です。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '276',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          263 =>
          array (
                 'id' => 264,
                 'm__tour_id' => '14',
                 'checkpoint_title' => 'マンローブ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '290',
                 'comments' => '熱帯、亜熱帯の河口など、潮の満ち干の影響を受ける場所に生育する植物をまとめてマングローブと呼びます。マングローブの特徴は、その形状です。泥の中は酸素が不足するため、「呼吸根」と呼ばれる根を泥から出し、酸素を取り込んでいます。マングローブの林には、カニやハゼの仲間など多くの生物が生息し、それを求め様々な水鳥も集まります。
                 日本では種子島以南の場所で自然分や布しており、マングローブ林の中をカヤックに乗って探索するコースも人気があります。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '277',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          264 =>
          array (
                 'id' => 265,
                 'm__tour_id' => '14',
                 'checkpoint_title' => 'やんばる',
                 'checkpoint_category' => '終了',
                 'distance' => '320',
                 'comments' => '沖縄北部の大宜味村、東村、国頭村には「やんばる」と呼ばれる大自然が存在します。
                 このエリアは国立公園に指定されており、雄大なカルスト地形がみられる「大石林山」やマングローブ林などたくさんの自然の景観を楽しめます。
                 また、ヤンバルクイナやオキナワトゲネズミなどここでしか見られない動植物がたくさん生息しており、現在も自然環境が比較的良い状態で残っています。',
                 'prefectures' => '沖縄',
                 'm__collection_id' => '278',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          265 =>
          array (
                 'id' => 266,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '函館山',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '日本三大夜景、さらに世界三大夜景でもある「函館山」は、
                 両側を海に挟まれた独特の地形が街の明かりを美しく引き立てます。
                 ゴールデンタイムは日没後30分で、夕暮れの中街の明かりが美しく映え、写真撮影には最高の時間帯です。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '280',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          266 =>
          array (
                 'id' => 267,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '大沼国定公園',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '35',
                 'comments' => '昭和33年7月に、南北海道の唯一の国定公園となった「大沼国定公園」は、駒ケ岳や大沼、小沼などの大小の沼やその周辺地域を含み、総面積は9083ヘクタールに及びます。公園内にはたくさんの動植物が生息しており、バードウォッチングやトレッキングが楽しめます。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '281',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          267 =>
          array (
                 'id' => 268,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '木彫り熊',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '70',
                 'comments' => '北海道土産の定番でもある「木彫り熊」は、明治維新後の八雲町で徳川農場を経営していた、尾張徳川家の当主徳川義親が、ヨーロッパへ視察旅行へ行った際に、スイス土産として木彫りの熊を購入したことから始まりました。
                 スイスでは、農民が観光客のためにペザントアート(農民美術)を副業として作っており、その技術を八雲町で取り入れたことで今の形の土産物として根付いていきました。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '282',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          268 =>
          array (
                 'id' => 269,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'かにめし',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '100',
                 'comments' => '「かにめし」は長万部町の名物グルメとして、駅弁でも有名です。火で炙ったカニを塩こしょうで味付けし、ごはんの上に盛付てあるシンプルながらもカニの風味を存分に感じられる一品です。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '283',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          269 =>
          array (
                 'id' => 270,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'るいべ漬け',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '135',
                 'comments' => '「るいべ」とは、お刺身用の鮭を凍らせた状態のことをいいます。天然秋鮭を使って作られ、特製醤油に鮭といくらをあえたものが「るいべ漬け」です。
                 北海道の郷土料理として絶大な人気を誇ります。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '284',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          270 =>
          array (
                 'id' => 271,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '登別温泉',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '165',
                 'comments' => '登別温泉は9種類の多彩な泉質と湧出量が1日1万トンの豊富な湯量から、「温泉デパート」と称され、日本全国から湯治客が訪れます。泉源のある地獄谷や日和山は今でも活発に活動し、高温の水蒸気や火山ガスが激しく噴き出しています。また、温泉街は鬼がシンボルとしてあちこちに潜んでおり、散策も楽しめます。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '285',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          271 =>
          array (
                 'id' => 272,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'ほっき貝',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '195',
                 'comments' => '苫小牧市は「ほっき貝」の水揚量日本一を誇り、一年中いつ食べても高品質です。苫小牧で水揚げされる「ほっき貝」は9㎝以上の大型の貝のみを出荷し、肉厚で甘みが強いのが特徴です。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '286',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          272 =>
          array (
                 'id' => 273,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'アイヌ民族',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '225',
                 'comments' => 'アイヌ民族は、おおよそ17世紀から19世紀において東北地方北部から北海道、サハリン、千島列島に及ぶ広い範囲を暮らしてきた人達です。 独自の言葉や文化を持ち、北東アジアなどの周辺民族とも関わりながら暮らしていました。アイヌとは人間を意味します。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '287',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          273 =>
          array (
                 'id' => 274,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '夕張メロン',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '北海道を代表する名物の「夕張メロン」は、大玉でとても柔らかい果肉とジューシーな食感が特徴です。
                 夕張市では、このメロンを使った地元でしか味わえないスイーツなども生産されています。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '288',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          274 =>
          array (
                 'id' => 275,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'キタキツネ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '290',
                 'comments' => '北海道のほぼ全域に多く生息しており、北海道での遭遇率はNO1の野生動物です。近年観光客の餌やりが問題になっており、食べ物欲しさに道路に飛び出て事故にあったり、病気をするキツネも増えているとのこと。
                 ドライブ中に野生のキツネに遭遇しても、決して近づかないよう注意をしましょう！',
                 'prefectures' => '北海道',
                 'm__collection_id' => '289',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          275 =>
          array (
                 'id' => 276,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'ラベンダー',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '325',
                 'comments' => '7月中旬から7月下旬頃、富良野市では市内のあちこちのラベンダー畑が見ごろを迎えます。
                 中でも「花人街道」と呼ばれる国道237号線沿いには、集中してファームがあるため、それぞれのファームのラベンダー畑が楽しめます。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '290',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          276 =>
          array (
                 'id' => 277,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '丘のまち',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '355',
                 'comments' => '十勝岳連峰の裾野に広がる美瑛町は、なだらかな波状丘陵が続く地形が特徴の丘のまちとして多くの観光客が訪れます。
                 北西側の丘陵には碁盤の目のように種類の違う農産物が植えられ、その風景がパッチワークに見えることから「パッチワークの路」と呼ばれています。
                 また、南東側に広がる「パノラマロード」は、360度を見渡せる高台のエリアで、雄大な風景が楽しめます。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '291',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          277 =>
          array (
                 'id' => 278,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'ジンギスカン',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '390',
                 'comments' => '北海道を代表する郷土料理のひとつですが、焼いた肉をタレにつけて食べる札幌式と、たれに付け込んだ肉を焼いて食べる滝川式があり、北海道の中でも地域によって食べ方に違いがあります。
                 滝川市のジンギスカンは、リンゴや玉ねぎ、生姜、醤油などのタレに付け込むことで、羊の臭みがなく食べやすい一品です。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '292',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          278 =>
          array (
                 'id' => 279,
                 'm__tour_id' => '15',
                 'checkpoint_title' => 'ハスカップ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '425',
                 'comments' => 'ハスカップは寒冷地に自生しており、非常に傷みが早く流通に適さないため、本州にはほとんど出回ることがない北海道の特産物です。
                 見た目はブルーベリーのようですが、ブルーベリーより酸味があり、円錐状の形をしています。近年は豊富な栄養素が注目され、「不老長寿の果実」として全国から注目されています。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '293',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          279 =>
          array (
                 'id' => 280,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '札幌ラーメン',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '460',
                 'comments' => '「札幌ラーメン」といえば味噌ラーメンのイメージが強いですが、ほとんどの店で正油・塩・味噌という３種類の味があることが特徴です。 また、「札幌ラーメン」には炒めた野菜を入れることが多く、味が濃く量が多いことも特徴です。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '294',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          280 =>
          array (
                 'id' => 281,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '雪まつり',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '480',
                 'comments' => '毎年2月上旬に札幌市内の大通公園を含めた3つの会場では「さっぽろ雪まつり」が開催され、多くの観光客が訪れます。昭和25年に始まった雪まつりは、大小様々な雪像や氷の彫刻の展示や、雪上アクティビティが楽しめたりと、冬の北海道を満喫できるイベントです。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '295',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          281 =>
          array (
                 'id' => 282,
                 'm__tour_id' => '15',
                 'checkpoint_title' => '小樽運河',
                 'checkpoint_category' => '終了',
                 'distance' => '510',
                 'comments' => '小樽は、北海道への上陸地のひとつとして、また物資の運搬や交易の拠点として機能していました。当時は荷物を積んだたくさんの艀(はしけ※船幅が広く平底の小舟)が運河を出入りしており、小樽港は北海道開拓の玄関口として発展してきました。現在は63基のガス灯が設置され、運河沿いの石造倉庫群は当時の姿のままレストランなどに再利用されています。',
                 'prefectures' => '北海道',
                 'm__collection_id' => '296',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


       
     ));

}}



