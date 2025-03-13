<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name'];

    // Relasi One-to-Many ke DivisionMember
    public function members()
    {
        return $this->hasMany(DivisionMember::class);
    }
}
