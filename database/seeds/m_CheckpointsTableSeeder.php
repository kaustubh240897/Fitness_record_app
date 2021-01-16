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
                 'comments' => 'Nice checkpoint1 it is start',
                 'prefectures' => 'prefecture 1',
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
                 'comments' => 'Checkpoint2 worth to travel',
                 'prefectures' => 'prefecture 2',
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
                 'comments' => 'Checkpoint3 reached to mid of tour1',
                 'prefectures' => 'prefecture 3',
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
                 'comments' => 'Checkpoint4 here it ends, It is aewsome trip.',
                 'prefectures' => 'prefecture 4',
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
                 'comments' => 'Checkpoint1 of tour2, it is starting.',
                 'prefectures' => 'prefecture 5',
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
                 'comments' => 'Good going, good checkpoint2',
                 'prefectures' => 'prefecture 6',
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
                 'comments' => 'Checkpoint3 Reached to midpoint of tour2.',
                 'prefectures' => 'prefecture 7',
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
                 'comments' => 'Checkpoint4 Nice checkpoint',
                 'prefectures' => 'prefecture 8',
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
                 'comments' => 'Checkpoint5 here tour2  ends.',
                 'prefectures' => 'prefecture 9',
                 'm__collection_id' => '10',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          9 => 
          array (
                 'id' => 10,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'tour 3 checkpoint 1',
                 'checkpoint_category' => 'start',
                 'distance' => '0',
                 'comments' => 'Checkpoint1 here tour3 starts.',
                 'prefectures' => 'prefecture 10',
                 'm__collection_id' => '12',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          10 => 
          array (
                 'id' => 11,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'tour 3 checkpoint 2',
                 'checkpoint_category' => 'spot',
                 'distance' => '0.5',
                 'comments' => 'Checkpoint2 here tour3 is going on.',
                 'prefectures' => 'prefecture 11',
                 'm__collection_id' => '13',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          11 => 
          array (
                 'id' => 12,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'tour 3 checkpoint 3',
                 'checkpoint_category' => 'intermediate',
                 'distance' => '1',
                 'comments' => 'Checkpoint3 here tour3 comes in intermediate.',
                 'prefectures' => 'prefecture 12',
                 'm__collection_id' => '14',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),

          12 => 
          array (
                 'id' => 13,
                 'm__tour_id' => '3',
                 'checkpoint_title' => 'tour 3 checkpoint 4',
                 'checkpoint_category' => 'endpoint',
                 'distance' => '2',
                 'comments' => 'Checkpoint4 here tour3 ends.',
                 'prefectures' => 'prefecture 13',
                 'm__collection_id' => '15',
                 'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          ),


       
     ));

}}