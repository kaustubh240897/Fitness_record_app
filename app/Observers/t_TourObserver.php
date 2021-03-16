<?php

namespace App\Observers;
use Illuminate\Support\Facades\Auth;
use App\t_Tour;
use App\m_Users;
use App\t_Collection;
Use \Carbon\Carbon;
class t_TourObserver
{

   
    /**
     * Handle the t_ tour "created" event.
     *
     * @param  \App\t_Tour  $tTour
     * @return void
     */
    public function creating(t_Tour $tTour)
    {
       $mytime = Carbon::now();
       $m__users_id = m_Users::where('users_id', Auth::id())->first()->id;

    //    $get_t_tour = t_Tour::where('m__users_id', $m__users_id)->where('status', 'Inprogress')->orderBy('created_at', 'DESC')->first();
    //    if($get_t_tour !=null){
    //         $get_created_date = $get_t_tour->created_at;
            
    //         $get_t_collections = t_Collection::where('m__users_id', $m__users_id)->where('created_at', '>=', $get_created_date)->get();
    //         foreach($get_t_collections as $get_t_collection ){
    //             $get_t_collection->delete();
    //         }
    //     }
       $t_tours = t_Tour::where('m__users_id', $m__users_id)->get();
       foreach($t_tours as $t_tour){
           if($t_tour->status == 'Inprogress'){
                $t_tour->status = 'Cancel';
                $t_tour->cancellation_datetime = $mytime->toDateTimeString();
                $t_tour->save();
                $t_tour->delete(); 

           }
       }
      
    }

    /**
     * Handle the t_ tour "updated" event.
     *
     * @param  \App\t_Tour  $tTour
     * @return void
     */
    public function updated(t_Tour $tTour)
    {
        //
    }

    /**
     * Handle the t_ tour "deleted" event.
     *
     * @param  \App\t_Tour  $tTour
     * @return void
     */
    public function deleted(t_Tour $tTour)
    {
        //
    }

    /**
     * Handle the t_ tour "restored" event.
     *
     * @param  \App\t_Tour  $tTour
     * @return void
     */
    public function restored(t_Tour $tTour)
    {
        //
    }

    /**
     * Handle the t_ tour "force deleted" event.
     *
     * @param  \App\t_Tour  $tTour
     * @return void
     */
    public function forceDeleted(t_Tour $tTour)
    {
        //
    }
}
