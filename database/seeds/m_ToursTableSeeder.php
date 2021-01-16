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
                 'tour_title' => 'Tour 1',
                 'tour_comment' => 'This is tour1.',
                 'm__collection_id' => '5',
                 'tour_level' => '1',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),


          1 => 
          array (
                 'id' => 2,
                 'tour_title' => 'Tour 2',
                 'tour_comment' => 'This is tour2.',
                 'm__collection_id' => '11',
                 'tour_level' => '2',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

          2 => 
          array (
                 'id' => 3,
                 'tour_title' => 'Tour 3',
                 'tour_comment' => 'This is for testing tour3.',
                 'm__collection_id' => '16',
                 'tour_level' => '0',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        
        
        
        

          ));
    }

}
