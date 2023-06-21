<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Setting extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='settings';
    protected $guarded=[];


}
