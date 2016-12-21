<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $fillable = [
        'slug', 'name', 'title', 'author_id', 'seo_title',
        'excerpt', 'body', 'image', 'slug', 'meta_description',
        'meta_keywords', 'status', 'featured','reply_count',
        'view_count','vote_count','last_reply_user_id'

    ];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->id;
        }

        parent::save();
    }

    public function author_id()
    {
        return $this->belongsTo(User::class);
    }

    public function last_reply_user_id()
    {
        return $this->belongsTo(User::class);
    }
}
