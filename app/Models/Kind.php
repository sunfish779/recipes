<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory;

    protected $fillable = [
        'kind_name',
    ];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
