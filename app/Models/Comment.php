<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int    $id
 * @property string $content
 * @property int    $user_id
 * @property int    $post_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $email
 */

class Comment extends Model
{
    use HasFactory;


//    public static function where(string $string, $id): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }

//    public static function find($id): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}

