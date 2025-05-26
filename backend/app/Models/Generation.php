<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    protected $fillable = [
        'title'
    ];

    public function pattern() {
        return $this->hasMany(Pattern::class, 'generation_id');
    }
}
