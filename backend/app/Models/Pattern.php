<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    protected $fillable = [
        'title',
        'marks_id',
    ];

    public function mark() {
        return $this->belongsTo(Mark::class);
    }

    public function car() {
        return $this->hasMany(Car::class, 'patterd_id');
    }
}
