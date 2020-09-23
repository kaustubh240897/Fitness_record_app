<?php

namespace App\Observers;

use App\t_Steps;

class t_StepsObserver
{
    /**
     * Handle the t_ steps "created" event.
     *
     * @param  \App\t_Steps  $tSteps
     * @return void
     */
    public function created(t_Steps $tSteps)
    {
        //
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
