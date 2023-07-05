<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Project extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='projects';
    protected $guarded=[];
    public $translationModel=ProjectTranslation::class;
    public $translatedAttributes = ['title','address','price'];
//    protected $dateFormat='dd-mm-yyyy';

    public function blocks()
    {
        return $this->hasMany(Block::class,'project_id','id');
    }
}
