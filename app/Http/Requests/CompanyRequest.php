<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.title"]='required|string|min:2';
        }
        return $data;
    }
}
