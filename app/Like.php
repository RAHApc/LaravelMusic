<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table='likes';
    protected $fillable=['music_id','user_ip'];
    public $timestamps=false;

    public function musics()
    {
        return $this->belongsToMany(Music::class,'likes');
    }

}
