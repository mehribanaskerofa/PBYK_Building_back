<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'floor'=>'numeric|min:0',
            'date'=>'date|after:today',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.address"]='required|string|min:2';
            $data["$lang.title"]='string';
        }
        return $data;
    }
}
