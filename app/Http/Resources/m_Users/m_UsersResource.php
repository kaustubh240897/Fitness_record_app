<?php

namespace App\Http\Resources\m_Users;

use Illuminate\Http\Resources\Json\JsonResource;
use App\m_Users;
class m_UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'serial_number' => $this->serial_number,
          'stride(in cm)'=> $this->stride,
          'step_goal_per_day' => $this->step_goal_per_day,
          'step_goals_per_month' => $this->step_goals_per_month,
          'tour_level' => $this->tour_level,
          'mobile_app' => $this->motion_app,
          'mobile_web' => $this->motion_web,
          'Total-distance(in m)' =>$this->t_steps->sum('steps') > 0 ? $this->t_steps->sum('steps')* $this->stride/ 100 : 'Not started yet!',
          'href' => [
              'steps' => route('steps.index', $this->id)
          ],
          'collection' => [
              'usercollections' => route('usercollections.index', $this->id)
          ],
           'user_logs' => [
              'logs' => route('logs.index', $this->id)
          ]
          



        ];
    }
}
