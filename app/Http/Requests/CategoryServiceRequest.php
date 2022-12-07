<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryServiceRequest extends FormRequest
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
        if($this->method() == "POST") {
            return [
                'title' => 'required|max:250',
                'image' => 'required',
                'body' => 'required',

            ];
        }else{
            return [
                'title' => 'required|max:250',
                'body' => 'required',
                ];
        }

    }
}
