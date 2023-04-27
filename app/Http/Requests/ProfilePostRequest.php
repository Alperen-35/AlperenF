<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['string','min:3','max:50'],
            'phoneNumber'=>['string','min:10','max:12'],
            'password'=>['string','min:6','max:12','confirmed'],
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Adı Soyadı',
            'phoneNumber'=> 'Telefon Numarası',
            'password' => 'Şifre',
        ];
    }
}
