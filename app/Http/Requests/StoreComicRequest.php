<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'=> ['required'],
            'type'=> ['required'],
            'price'=> ['required'],
            'description'=> ['required', 'min:10'],
            'sale_date'=> ['required']
        ];

    }
     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title' => 'Inserire un titolo',
            'type' => 'Inserire la tipologia',
            'price'=>'Inserire il prezzo',
             'sale_date'=> 'Inserire data come nell esempio : gg/mm/aaa',
            'description'=> 'Inserire una descrizione, min 10 caratteri'
           
        ];
    }
}