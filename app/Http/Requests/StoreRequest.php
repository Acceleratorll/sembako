<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'owner_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'slogan' => 'required',
            'front_img' => 'required',
            'banner_img' => 'required',
            'wallet' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];
    }
}
