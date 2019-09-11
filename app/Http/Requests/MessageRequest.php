<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required|email',
            'subject'=> 'required',
        ];
    }
    public function messages()
    {
        return[
          'name.required' => 'Le nom est obligatoire',
          'email.required' => 'Le mail est obligatoire',
          'subject.required' => 'Le sujet est obligatoire',

        ];
    }
}
