<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $title
 */
class Forum extends Model
{
    use HasFactory;

    public mixed $description;

    public static function find($id)
    {
    }

    public function comments()
    {
    return $this->hasMany(Comment::class);
}

}
