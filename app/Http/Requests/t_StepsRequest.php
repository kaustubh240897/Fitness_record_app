<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class t_StepsRequest extends FormRequest
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
            
            'step_actual_datetime' => 'required',
            //'step_calc_datetime' => 'required',
            'steps' => 'required|integer',

        ];
    }
}
