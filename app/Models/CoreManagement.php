<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreManagement extends Model
{
    protected $table = 'core_managements';
    protected $fillable = ['name', 'photo', 'position'];

    // Enum untuk posisi agar bisa digunakan di controller
    public static function getPositions()
    {
        return ["Ketua", "Wakil", "Sekretaris Jenderal", "Bendahara 1", "Bendahara 2"];
    }
}
