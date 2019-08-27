<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PostLists extends Model
{
    use \Spatie\Tags\HasTags;

    protected $table = 'posts';
    
    public function tag_post_relationship()
    {
        return $this->belongsTo(Tag_post_relationship::class);
    }
}
