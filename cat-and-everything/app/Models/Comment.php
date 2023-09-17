<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * @var mixed|null
     */
    public mixed $user_id;
    /**
     * @var false|mixed|resource|string|null
     */
    public $content;

    public function user()
{
    return $this->belongsTo(User::class);
}
}
