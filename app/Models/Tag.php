<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    ### Relationships ###

    // Relation With Post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
