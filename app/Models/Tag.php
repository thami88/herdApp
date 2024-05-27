<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function Jobs()
    {
        return $this->belongsToMany(Job::class, relatedPivotKey:'job_listing_id');
    }

    public function Posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
