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
                 'checkpoint_title' => 'tour 1 checkpoint 1',
                 'checkpoint_category' => 'start',
                 'distance' => '0',
                 'comments' => 'Nice checkpoint it is start',
                 'prefectures' => 'kfnlkknlf',
                 'm__collection_id' => '1',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        
         1 => 
          array (
                 'id' => 2,
                 'm__tour_id' => '1',
                 'checkpoint_title' => 'tour 1 checkpoint 2',
                 'checkpoint_category' => 'spot',
                 'distance' => '25',
                 'comments' => 'good checkpoint',
                 'prefectures' => 'kfnlkknlfdnjk',
                 'm__collection_id' => '2',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),
        
           2 => 
          array (
                 'id' => 3,
                 'm__tour_id' => '1',
                 'checkpoint_title' => 'tour 1 checkpoint 3',
                 'checkpoint_category' => 'intermediate',
                 'distance' => '50',
                 'comments' => 'good checkpoint',
                 'prefectures' => 'kfnlkknlfadn',
                 'm__collection_id' => '3',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           3 => 
          array (
                 'id' => 4,
                 'm__tour_id' => '1',
                 'checkpoint_title' => 'tour 1 checkpoint 4',
                 'checkpoint_category' => 'endpoint',
                 'distance' => '100',
                 'comments' => 'Nice checkpoint',
                 'prefectures' => 'kf',
                 'm__collection_id' => '4',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           4 => 
          array (
                 'id' => 5,
                 'm__tour_id' => '2',
                 'checkpoint_title' => 'tour 2 checkpoint 1',
                 'checkpoint_category' => 'start',
                 'distance' => '0',
                 'comments' => 'Nice checkpoint it is starting.',
                 'prefectures' => 'kfnlk',
                 'm__collection_id' => '6',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           5 => 
          array (
                 'id' => 6,
                 'm__tour_id' => '2',
                 'checkpoint_title' => 'tour 2 checkpoint 2',
                 'checkpoint_category' => 'spot',
                 'distance' => '50',
                 'comments' => 'Good going, good checkpoint',
                 'prefectures' => 'kfnlkkn',
                 'm__collection_id' => '7',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           6 => 
          array (
                 'id' => 7,
                 'm__tour_id' => '2',
                 'checkpoint_title' => 'tour 2 checkpoint 3',
                 'checkpoint_category' => 'intermediate',
                 'distance' => '100',
                 'comments' => 'Nice checkpoint',
                 'prefectures' => 'kfnlkk',
                 'm__collection_id' => '8',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           7 => 
          array (
                 'id' => 8,
                 'm__tour_id' => '2',
                 'checkpoint_title' => 'tour 2 checkpoint 4',
                 'checkpoint_category' => 'spot',
                 'distance' => '150',
                 'comments' => 'Nice checkpoint',
                 'prefectures' => 'kfnlk',
                 'm__collection_id' => '9',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),
          ),

           8 => 
          array (
                 'id' => 9,
                 'm__tour_id' => '2',
                 'checkpoint_title' => 'tour 2 checkpoint 5',
                 'checkpoint_category' => 'endpoint',
                 'distance' => '200',
                 'comments' => 'End checkpoint',
                 'prefectures' => 'kfnlkknlf',
                 'm__collection_id' => '10',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),


       
     ));

}}