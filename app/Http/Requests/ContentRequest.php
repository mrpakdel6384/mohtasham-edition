<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
        if($this->method() == "POST"){
            return [
                'title'=>'required|max:255',
                'category_id'=>'required',
                'description'=>'required',
                'body'=>'required',
                'status'=>'required',
                'image'=>'required',
            ];
        }
        return [
            'title'=>'required|max:255',
            'category_id'=>'required',
            'description'=>'required',
            'body'=>'required',
            'status'=>'required',
        ];
    }
}
