<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'label'];

    /**
     * Get the comments for the blog post.
     */
    public function members()
    {
        return $this->hasMany('App\Member', 'department');
    }
}
