<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $fillable = [

        'email',
        'phone',
        'paper_type',
    ];
    public function deadlineName()
    {
        return $this->belongsTo(Deadline::class, 'deadline', 'id');
    }
}
