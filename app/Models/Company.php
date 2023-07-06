<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Company extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='company';
    protected $guarded=[];
    public $translationModel=CompanyTranslation::class;
    public $translatedAttributes = ['title'];
}
