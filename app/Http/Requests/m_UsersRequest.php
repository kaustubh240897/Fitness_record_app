<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class m_UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'serial_number' => 'required|max:255|unique:m__users',
            'stride' => 'required|max:3',
            'users_id' => 'required',
            'step_goal_per_day' => 'required|max:10',
            'step_goals_per_month' => 'required|max:15',
            'tour_level' => 'required|max:3',
            'motion_app' => 'required',
            'motion_web' => 'required',
        ];
    }
}
