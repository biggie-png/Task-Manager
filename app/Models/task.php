<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable =[
            'title',
            'descirption',
            'status',
            'priority',
            'due_date'

    ];

    protected function casts(): array
    {
        return[];
    }
    

    

    
}
