<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', //sekre, direksi, sekper
        'direksi_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi: user milik salah satu direksi

    public function files()
    {
        return $this->hasMany(File::class);
    }

     public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function direksi()
    {
        return $this->belongsTo(Direksi::class);
    }

    // Relasi: user bisa membuat banyak agenda
    public function agenda()
    {
        return $this->hasMany(Agenda::class, 'created_by');
    }
}
