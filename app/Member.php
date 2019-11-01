<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'birthday', 'department', 'position'];

    /**
     * Get the post that owns the comment.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
