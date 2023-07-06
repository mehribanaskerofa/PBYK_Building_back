<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HouseRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'block_id'=>'numeric|exists:blocks,id',
            'floor'=>'numeric|min:0',
            'room'=>'numeric|min:0',
            'area'=>'string',
            'date'=>'date|after:today',
            'active'=>'nullable|boolean',
            'layout'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg'],
        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.price"]='string';
        }
        return $data;
    }
}
