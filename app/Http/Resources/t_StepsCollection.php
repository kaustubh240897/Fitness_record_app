<?php

namespace App\Http\Resources;
use App\t_Steps;
use Illuminate\Http\Resources\Json\JsonResource;

class t_StepsCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'm__users_id'=> $this->m__users_id,
            'step_actual_datetime'=>$this->step_actual_datetime,
            'step_calc_datetime'=> $this->step_calc_datetime,
            'steps'=> $this->steps
                        
    
        ];
    }
}
