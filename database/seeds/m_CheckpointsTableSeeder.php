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
                 'checkpoint_title' => '六甲山',
                 'checkpoint_category' => '開始',
                 'distance' => '0',
                 'comments' => '神戸市の西から北へ連なる六甲山は、ケーブルカーやロープウェーを利用し、簡単に登ることができます。山頂には牧場やオルゴールミュージアム、植物園といったの観光スポットが多くあり、中でも日本三大夜景の一つである摩耶山からの夜景は、神戸から関空まで一望できる、人気絶景スポットです。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '163',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          155 => 
          array (
                 'id' => 156,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '神戸北野異人館街',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '35',
                 'comments' => '"現在でも日本の主要な国際貿易港のひとつである神戸港は、1868(慶応3)年、函館・長崎・横浜についで開港された港です。古くからたくさんの外国人関係者を迎え入れていました。
                 神戸市中央区北野町の一帯は、外国人の居留地として日本が家や土地を貸し出したエリアで、明治から大正時代に建てられた洋館が、21も残っており、見学ができる施設も多くあります。
                 "',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '164',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          156 => 
          array (
                 'id' => 157,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '明石焼き',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '65',
                 'comments' => '明石市は新鮮なたこが水揚げされることでも有名ですが、そのたこを使用したたこの石焼きは、だし汁に浸して食べる郷土料理として全国的にも有名です。だし汁の風味と、卵たっぷりの生地はとてもやさしい味わいです。主な材料は小麦粉、卵、たことシンプルのため「卵焼き」と呼ばれることもあります。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '165',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          157 => 
          array (
                 'id' => 158,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '姫路城',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '100',
                 'comments' => '日本100名城にも選定されている兵庫県姫路市の国宝「姫路城」。慶長14(1609)年に赤松貞範により建築された大天守は白漆喰の城壁が特徴で、白鷺のように見える姫路城は、別名白鷺城(はくろじょう・しらさぎじょう)とも呼ばれます。黒田重隆が城郭やのちに豊臣秀吉となる羽柴秀吉など、さまざまな武将や大名によって治められ、建て替えや拡張が行われてきました。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '166',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          158 => 
          array (
                 'id' => 159,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '赤穂',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '135',
                 'comments' => '赤穂市は歌舞伎の演目や時代でも有名な「忠臣蔵」の題材となる、四十七名の赤穂浪士の故郷です。市内には赤穂浪士を祀る「大石神社」や、「赤穂城跡」、毎年開催れている「赤穂義士祭」など、ゆかりの地ならではの観光スポットがたくさんあります。',
                 'prefectures' => '兵庫',
                 'm__collection_id' => '167',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          159 => 
          array (
                 'id' => 160,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '備前焼',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '155',
                 'comments' => '備前焼は、一点ずつ成形し、乾燥させたのち、絵付けもせず釉薬も使わずそのまま焼いたもので、茶褐色の粘土の鉄分がよく表れている焼き物です。土の性質や、窯への詰め方や窯の温度の変化、焼成時の灰や炭などによって生み出される備前焼は、一つとして同じ色、同じ模様にはなりません。火は、1200〜1300度の高温で最低でも7日間、長い場合は10～12日間もの間炊き続けられます。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '168',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          160 => 
          array (
                 'id' => 161,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '桃太郎',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '180',
                 'comments' => 'むかしばなしで有名な桃太郎のお話は、岡山に伝わる桃太郎伝説「吉備津彦命(きびつひこのみこと)の温羅(うら)退治です」がルーツとなっています。岡山市内にある「吉備津神社」はまさに「桃太郎」発祥の地としても有名な場所。その他にも鬼城山や矢喰宮など伝説にまつわる観光スポットが点在しています。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '169',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          161 => 
          array (
                 'id' => 162,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '国産ジーンズ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '215',
                 'comments' => '倉敷市にある児島地区は、瀬戸内海に面した港町です。そのため塩分を含む土が稲作には向かず、綿花栽培が盛んに行われたことで、繊維産業の町として独自に発展しました。元々大正以降は学生服の製造で全国トップシェアでしたが、時代が合繊に代わり窮地に追い込まれたところで、ジーンズ製造に打って出たことが始まりです。ここ児島は言わずと知れた国産ジーンズ発祥の地。一つ一つ手作業で作ること、日本の伝統的な「藍染め」技術が高く評価され国内外から愛されています。現在児島地区には「児島ジーンズストリート」があり、国産ジーンズショップが集まる人気スポットとなっています。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '170',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          162 => 
          array (
                 'id' => 163,
                 'm__tour_id' => '9',
                 'checkpoint_title' => 'カブトガニ',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '245',
                 'comments' => '笠岡市は生きた化石といわれる国指定天然記念物「カブトガニ」の繁殖地です。世界で唯一のカブトガニ博物館が建ち、展示はもちろん、その研究も行われています。',
                 'prefectures' => '岡山',
                 'm__collection_id' => '171',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          163 => 
          array (
                 'id' => 164,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '鞆の浦',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '255',
                 'comments' => '福山市の中心部から南に14kmの海岸沿いに位置する鞆の浦。今も白壁土蔵や町家が残る江戸時代の古い町並みが残ります。瀬戸内海航路の要所として発展した鞆の浦は、豪商の屋敷や船番所、古刹などが狭い範囲に立ち並び、気軽に散策が楽しめます。港先端に立つ常夜燈は、鞆の浦のシンボルです。また、鞆の浦は人気アニメ映画のモデルとなった街でもあります。',
                 'prefectures' => '広島',
                 'm__collection_id' => '172',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          164 => 
          array (
                 'id' => 165,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '尾道と猫の細道',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '265',
                 'comments' => '"瀬戸内海に面した街「尾道」は、坂道に古寺や民家が並び昭和レトロな港町の景色が今も残り、映画やドラマなど数々の映像作品の舞台としても有名です。
                 また、「猫の細道」は尾道市を拠点に活動する絵師の園山春二氏が作る「福石猫」を、1998年から置き始めたのがきっかけです。現在は道のあちこちに「福石猫」が置いてあり、尾道の名物となっています。
                 さらに街中を散策すると住み着いている猫と遭遇することもあります。
                 「猫の細道」を中心に、尾道は猫好きにはたまらない猫に関するスポットが満載の街です。"',
                 'prefectures' => '広島',
                 'm__collection_id' => '173',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          165 => 
          array (
                 'id' => 166,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '大久野島',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '295',
                 'comments' => '"竹原市の忠海港から船で約15分の大久野島は、むかし毒ガス工場があったことから「地図から消された島」と呼ばれていました。
                 現在、周囲4キロメートルほどの島には約900羽もの野生のうさぎが棲息し、多くの観光客が訪れます。人懐っこく、間近で一緒に写真を撮ることができる、癒しのスポットです。"',
                 'prefectures' => '広島',
                 'm__collection_id' => '174',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          166 => 
          array (
                 'id' => 167,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '西条酒蔵通り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '325',
                 'comments' => '広島市の西条は酒造りに適した気候や地下水の恵みから「日本三代銘醸地」と呼ばれる酒どころです。西条駅南側に広がる西条酒蔵通りには７軒もの歴史ある酒蔵が並んでいます。オリジナルグッズやSNS映えするここだけのフォトスポット、美味しいグルメやスイーツなども楽しめ、街ブラもおすすめです。',
                 'prefectures' => '広島',
                 'm__collection_id' => '175',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          167 => 
          array (
                 'id' => 168,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '原爆ドーム',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '360',
                 'comments' => '1945年8月6日、午前8時15分に、人類史上初めての原子爆弾が投下されました。原爆投下のほぼ真下に位置しながら、奇跡的にも倒壊せず鉄骨部分がむき出しの状態で残りました。被爆の惨状を今に伝え、核兵器廃絶と恒久平和の大切さを伝えるシンボルとして、1996年世界遺産に登録されました。',
                 'prefectures' => '広島',
                 'm__collection_id' => '176',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          168 => 
          array (
                 'id' => 169,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '厳島神社',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '395',
                 'comments' => '"嚴島神社は日本三景のひとつ「安芸の宮島」として毎年多くの観光客が訪れます。
                 創建は推古天皇元年。その後の1168年、平清盛により現在のような寝殿造りの社殿が造られました。廻廊部分は海辺に位置し、潮が満ちると海に浮かぶように見えます。
                 その全建造物は国宝および国の重要文化財であり、平成8(1996)年には周囲の原生林を含め世界遺産に登録されました。
                 参道の宮島表参道商店街は、名物の牡蠣やあなごなど様々なグルメが楽しめます。"',
                 'prefectures' => '広島',
                 'm__collection_id' => '177',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          169 => 
          array (
                 'id' => 170,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '錦帯橋',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '435',
                 'comments' => '"山口県岩国市にある5連のアーチが美しい国内屈指の木造橋の「錦帯橋」は、奇跡の名橋ともいわれ日本三名橋の一つです。寛文13年(1673)、両岸に広がる城下町を繋ぐ橋として、岩国藩主・吉川氏によって建造されました。
                 それまでの橋は洪水の度に流されており、何度も研究を重ね完成されました。
                 橋の周辺は、春は桜、秋は紅葉の名所でもあり、美しい橋と自然のコントラストが楽しめます。"',
                 'prefectures' => '山口',
                 'm__collection_id' => '178',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          170 => 
          array (
                 'id' => 171,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '周南コンビナート',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '470',
                 'comments' => '"周南市の海沿いは化学工場が多く、様々な場所や角度から工場夜景を楽しめます。
                 晴海親水公園から眺める工場夜景は日本夜景遺産に認定されるおすすめスポットです。"',
                 'prefectures' => '山口',
                 'm__collection_id' => '179',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          171 => 
          array (
                 'id' => 172,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '山口ちょうちん祭り',
                 'checkpoint_category' => 'ポイント',
                 'distance' => '505',
                 'comments' => '毎年8月6日、7日に山口市内で開催される約600年前から続く盆行事です。室町時代に山口を治めていた大名が父母の冥福を祈るために盆の夜に笹竹の灯ろうをともしたのを起源とし、やがて町民の間に盆行事として広がったといわれています。数千本の竹につけたおよそ10万個ものちょうちんが揺れながら夜の街を彩り赤く染めます。山口の夏の風物詩です。',
                 'prefectures' => '山口',
                 'm__collection_id' => '180',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          172 => 
          array (
                 'id' => 173,
                 'm__tour_id' => '9',
                 'checkpoint_title' => '秋吉台',
                 'checkpoint_category' => '終了',
                 'distance' => '535',
                 'comments' => '美祢市の中・東部に広がる日本最大級のカルスト台地です。1955年に国定公園に、1964年に特別天然記念物に指定されました。この雄大な大地の景観を作り出した石灰石は、今からおよそ3億5千万年前に南方の海でサンゴ礁として誕生したもので、約8千万年もの長い年月をかけて海底を移動しながら大陸の上に隆起し、現在のようなカルスト台地が形成されたといわれています。',
                 'prefectures' => '山口',
                 'm__collection_id' => '181',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),














       
     ));

}}