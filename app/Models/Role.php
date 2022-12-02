<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];
    // protected $fillables=['name','permissions'];



    protected function permissions(): Attribute
    {
        return Attribute::make(
            // get: fn ($value) => ucfirst($value),
            get: fn ($value) => json_decode($value,true),
        );
    }
}
