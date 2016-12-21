<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-21
 * Time: 下午2:56
 */
namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Reply extends Model
{
    protected $fillable = [
        'source', 'post_id', 'user_id', 'is_blocked', 'vote_count',
        'body', 'body_original',
    ];


    public function post_id()
    {
        return $this->belongsTo(Post::class);
    }

    public function user_id()
    {
        return $this->belongsTo(User::class);
    }
}