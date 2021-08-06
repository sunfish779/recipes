<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

class Recipe extends Model
{
    use HasFactory;

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }
}
