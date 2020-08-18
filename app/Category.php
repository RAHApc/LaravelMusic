<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=['parent_id','name','description'];
    public $timestamps=false;

    use Sluggable;

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

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id','id');
    }

    public function albums()
    {
        return $this->morphedByMany(Album::class,'categorizable');
    }

    public function musics()
    {
        return $this->morphedByMany(Music::class,'categorizable');
    }
}

