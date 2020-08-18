<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use Sluggable;

    protected $table='albums';
    protected $fillable=
        ['singer_id','name','image_url','description'];
    public $timestamps=false;


    public function scopeSearch($query,$keyword)
    {
        $query->where('name','like',"%$keyword%")->with('singer');
        return $query;
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function path($id=null)
    {
        if($id!=null)
        {

        }
        return "/album/$this->slug";
    }

    public function singer()
    {
        return $this->belongsTo(Singer::class,'singer_id','id');
    }

    public function singers()
    {
        return $this->hasMany(Singer::class,'id','singer_id');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class,'categorizable');
    }

    public function musics()
    {
        return $this->belongsToMany(Music::class,'album_musics');
    }
}
