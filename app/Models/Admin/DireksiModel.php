<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DireksiModel extends Model
{
    //

    use HasFactory;
    
    protected $fillable = [
        'nama_direksi',
        'jabatan',
        'email_kantor',
    ];

    // Relasi: direksi punya banyak user (sekre terkait)
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Relasi: direksi punya banyak agenda
    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }
}
