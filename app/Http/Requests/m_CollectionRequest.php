<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class m_CollectionRequest extends FormRequest
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
            'collection_category' => 'required',
            'collection_title' => 'required|max:255',
            'file_name' => 'required|max:20',
            'path'    => 'required|max:255|unique:m__collections',
           
        ];
    }
}
