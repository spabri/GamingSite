<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required',
            'category'=>'required',
            'body'=>'required',
            'price'=>'required',
            'img'=>'required|image'
            
        ];
    }
    
    public function messages(){
        return[
            'title.required'=>"Il nome dell'articolo è obbligatorio",
            'category.required'=>"La categoria dell'articolo è obbligatoria",
            'body.required'=>"La descrizione dell'articolo è obbligatoria",
            "price.required"=>"Il prezzo (medio) dell'articolo dev'essere indicato",
            "img.required"=>"L'immagine è obbligatoria",
            "img.image"=>"Il file dev'essere di tipo immagine"
        ];
    }
}
