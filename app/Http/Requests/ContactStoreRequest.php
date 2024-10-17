<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required' , 'max:20', 'min:2'],
            'email' => ['required' , 'email']
        ];
    }
    function messages()
    {
        return[
            'name.required' => 'hey tolong minimal 2 kata cok',
             'name.max' => 'heyy kefull cok ',
             'name.min' => 'kecil kali cok 2 lah',
             'email.required' => 'oi pokaii email cok'
        ];
    }
}
