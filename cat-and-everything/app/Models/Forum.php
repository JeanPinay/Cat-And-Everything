<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $title
 */
class Forum extends Model
{
    protected $fillable = ['title', 'description', 'created_at', 'updated_at'];
    use HasFactory;

    public mixed $description;

    public static function find($id)
    {
    }
 // If you want to allow NULL values for description
 public static function boot() {
    parent::boot();
    static::creating(function ($model) {
        $model->description = $model->description ?? null;
    });
}
    public function comments()
    {
    return $this->hasMany(Comment::class);
}

}
