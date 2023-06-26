<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlockRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'project_id'=>'numeric|exists:projects,id',
            'block'=>'numeric|min:0',
            'date'=>'date|after:today',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg'],
            'layout'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg'],
        ];
        return ($data);
    }

}
