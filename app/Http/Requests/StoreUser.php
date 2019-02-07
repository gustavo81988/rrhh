<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name'     => 'required|max:255',
            'role'     => 'required|max:30',
            'email'    => 'required|max:255|email',
            'password' => 'required|max:255',
        ];
    }

    public function modifyInput(array $data)
    {
        $data['password'] = 'tavo';
        return $data;
    }
}
