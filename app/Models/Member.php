<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'birthday',
        'department',
        'position',
    
    ];
    
    
    protected $dates = [
        'birthday',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/members/'.$this->getKey());
    }
}
