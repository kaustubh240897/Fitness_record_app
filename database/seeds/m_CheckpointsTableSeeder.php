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







       
     ));

}}