<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $fillable=['body','name','dateComment'];
    public $timestamps=false;

    public function commentable()
    {
        return $this->morphTo();
    }
}
