<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionMember extends Model
{
    protected $fillable = ['name', 'photo', 'position', 'division_id'];

    // Relasi ke Division (Many-to-One)
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    // Enum untuk posisi dalam divisi
    public static function getPositions()
    {
        return ["Ketua", "Sekretaris", "Anggota"];
    }
}
