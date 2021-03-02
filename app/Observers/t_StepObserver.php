<?php

namespace App\Observers;
use Illuminate\Support\Facades\Auth;
use App\t_Steps;
use App\m_Users;
use App\m_Checkpoint;
use App\t_Tour;
use App\t_Log;
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
        $m__users_id = m_Users::where('users_id', Auth::id())->first()->id;
        $thistime = Carbon::now();
        $t_log = new t_Log;
        $t_log->m__users_id = $m__users_id;
        $t_log->access_datetime = $thistime->toDateTimeString();
        $t_log->save();

                
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
