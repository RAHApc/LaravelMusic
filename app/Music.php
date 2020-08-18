<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Music extends Model
{
    protected $table='musics';
    protected $fillable=['singer_id','name','image_url','file_url','fullTime','description'];
    public $timestamps=false;
    protected $with=['singer'];

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

    public function path()
    {
        return "/music/track/$this->slug";
    }

    public function categories()
    {
        return $this->morphToMany(Category::class,'categorizable');
    }

    public function albums()
    {
        return $this->belongsToMany(Album::class,'album_musics');
    }

    public function singer()
    {
        return $this->belongsTo(Singer::class,'singer_id','id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function download()
    {
        $timestamp=Carbon::now()->addHours(5);
        $hash=Hash::make($timestamp.'qaxcfgnh');
        $code=$hash.'singer: '.$this->singer->name;

        return "/download/$this->id?mac=$code&h=$hash";
    }
}
