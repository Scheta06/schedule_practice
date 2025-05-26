<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'pattern_id',
        'extense_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pattern() {
        return $this->belongsTo(Pattern::class);
    }

    public function extence() {
        return $this->belongsTo(Extense::class);
    }
}
