<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';
    protected $fillable=['dateStart','dateEnd','timeStartEnd','name','city','image_url','description'];
    public $timestamps=false;

//    public function getDateStartAttribute($value)
//    {
//        return verta($value)->format('%d %B %Y');
//    }
}
