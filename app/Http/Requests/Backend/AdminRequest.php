<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'nama'      => ['required', 'string', 'min:3', 'max:255'],
            'nip'       => ['required',  'string', 'min:17', 'max:18', 'unique:users,nip'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'image'     => ['mimes:png,jpg,jpeg'],
            'stasiun'   => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
}