<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title'
    ];

    public function extence() {
        return $this->hasMany(Extense::class, 'category_id');
    }
}
