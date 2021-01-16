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
                 'collection_title' => 'checkpoint1 collection',
                 'path' => 'storage/collection1/',
                 'filename' => '01-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          1 => 
          array (
                 'id' => 2,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'checkpoint2 collection',
                 'path' => 'storage/collection2/',
                 'filename' => '01-06.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          2 => 
          array (
                 'id' => 3,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'checkpoint3 collection',
                 'path' => 'storage/collection3/',
                 'filename' => '01-07.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          3 => 
          array (
                 'id' => 4,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'checkpoint4 collection',
                 'path' => 'fdjknasdnlasn',
                 'filename' => 'a',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          4 => 
          array (
                 'id' => 5,
                 'collection_category' => 'tour',
                 'collection_title' => 'Tour1 collection',
                 'path' => 'storage/tour1/',
                 'filename' => '01-08.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          5 => 
          array (
                 'id' => 6,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour2 checkpoint1 collection',
                 'path' => 'storage/tour2 collection1/',
                 'filename' => '01-09.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          6 => 
          array (
                 'id' => 7,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour2 checkpoint2 collection',
                 'path' => 'fd0jdknn',
                 'filename' => 'a',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          7 => 
          array (
                 'id' => 8,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour2 checkpoint3 collection',
                 'path' => 'fdfdsjknn',
                 'filename' => 'a',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          8 => 
          array (
                 'id' => 9,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour2 checkpoint4 collection',
                 'path' => 'fdjknnoo',
                 'filename' => 'a',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          9 => 
          array (
                 'id' => 10,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'tour2 checkpoint5 collection',
                 'path' => 'fsddjknn',
                 'filename' => 'a',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
          10 => 
          array (
                 'id' => 11,
                 'collection_category' => 'tour',
                 'collection_title' => 'Tour2 collection',
                 'path' => 'storage/tour2/',
                 'filename' => '01-18.png',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          11 => 
          array (
                 'id' => 12,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'Tour3 checkpoint1 collection',
                 'path' => 'rr',
                 'filename' => 'gdhgfjh',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          12 => 
          array (
                 'id' => 13,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'Tour3 checkpoint2 collection',
                 'path' => 'rrr',
                 'filename' => 'gcfxfxf',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          13 => 
          array (
                 'id' => 14,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'Tour3 checkpoint3 collection',
                 'path' => 'rrrr',
                 'filename' => 'gfgffdddd',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          14 => 
          array (
                 'id' => 15,
                 'collection_category' => 'checkpoint',
                 'collection_title' => 'Tour3 checkpoint4 collection',
                 'path' => 'kkkkk',
                 'filename' => 'z',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          15 => 
          array (
                 'id' => 16,
                 'collection_category' => 'tour',
                 'collection_title' => 'Tour3 collection',
                 'path' => 'zzzzz',
                 'filename' => 'zz',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        
        
        
        

      ));   
         
    }
}
