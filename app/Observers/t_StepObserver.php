<?php

namespace App\Observers;
use Illuminate\Support\Facades\Auth;
use App\t_Steps;
use App\m_Users;
use App\m_Checkpoint;
use App\t_Tour;
use App\t_Collection;
Use \Carbon\Carbon;
class t_StepObserver
{
    
    /**
     * Handle the t_ steps "created" event.
     *
     * @param  \App\t_Steps  $tSteps
     * @return void
     */
    public function created(t_Steps $tSteps){
        
        $currentTime = Carbon::now();
        $m__user_id = m_Users::where('users_id', Auth::id())->first()->id;
        $user_stride = m_Users::where('users_id', Auth::id())->first()->stride;
        
        $get_t_tour = t_Tour::where('m__users_id', $m__user_id)->where('status', 'Inprogress')->orderBy('start_datetime','DESC')->first();
        
        if($get_t_tour !=null && $get_t_tour->status !='Done'){
            
            $tour_datetime = $get_t_tour->created_at->toDateTimeString();
            $get_m_tour_id = $get_t_tour->m__tours_id;
            
            $allCheckpoints = m_Checkpoint::where('m__tour_id', $get_m_tour_id)->get();
            $total = 0;
            $steps = 0;
            foreach ($allCheckpoints as $checkpoint) {
                if($checkpoint->checkpoint_category == 'endpoint'){
                    $total = $checkpoint->distance;
                    }
                }
            $allsteps = t_Steps::where('m__users_id', $m__user_id)->where('step_actual_datetime', '>=', $tour_datetime)->get()->sum('steps');

            $distanceCovered = $allsteps * $user_stride/100000 ;
            if($distanceCovered >= $total){
                $get_t_tour->status = 'Done';
                $get_t_tour->end_datetime = $currentTime->toDateTimeString();
                $get_t_tour->save();
                
            }


        $get_latest_t_tour = t_Tour::where('m__users_id', $m__user_id)->orderBy('start_datetime','DESC')->first();
        $latest_t_tour_datetime = $get_latest_t_tour->start_datetime;
        $get_t_collections = t_Collection::where('m__users_id', $m__user_id)->where('created_at', '>=', $latest_t_tour_datetime)->get();
        $collection_memory = [];
        foreach($get_t_collections as $get_t_collection){
            $collection_memory[]= $get_t_collection->m__collection_id;
        }
        $t_collection = new t_Collection;
        
           
            if($get_latest_t_tour->status == 'Done'){
                if($distanceCovered >= $total ){
                    $t_collection = new t_Collection;
                    $t_collection->m__users_id = $m__user_id;
                    $t_collection->m__collection_id = $checkpoint->m__collection_id;
                    $t_collection->save();
                    
                }
                $t_collection = new t_Collection;
                $t_collection->m__users_id = $m__user_id;
                $t_collection->m__collection_id = $get_latest_t_tour->m_tours->m__collection_id;
                $t_collection->save();
            }
            else{
                foreach($get_latest_t_tour->m_tours->checkpoints as $checkpoint){
                    
                    if($distanceCovered >= $checkpoint->distance && !(in_array($checkpoint->m__collection_id, $collection_memory)) ){
                        $t_collection = new t_Collection;
                        $t_collection->m__users_id = $m__user_id;
                        $t_collection->m__collection_id = $checkpoint->m__collection_id;
                        $t_collection->save();
                        break;
                    
                    }
                 
                } 
            }
        }

    }

    /**
     * Handle the t_ steps "updated" event.
     *
     * @param  \App\t_Steps  $tSteps
     * @return void
     */
    public function updated(t_Steps $tSteps)
    {
        //
    }

    /**
     * Handle the t_ steps "deleted" event.
     *
     * @param  \App\t_Steps  $tSteps
     * @return void
     */
    public function deleted(t_Steps $tSteps)
    {
        //
    }

    /**
     * Handle the t_ steps "restored" event.
     *
     * @param  \App\t_Steps  $tSteps
     * @return void
     */
    public function restored(t_Steps $tSteps)
    {
        //
    }

    /**
     * Handle the t_ steps "force deleted" event.
     *
     * @param  \App\t_Steps  $tSteps
     * @return void
     */
    public function forceDeleted(t_Steps $tSteps)
    {
        //
    }
}
