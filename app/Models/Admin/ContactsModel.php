<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    //
    protected $fillable = [
        'nama',
        'jabatan',
        'instansi',
        'email',
        'telepon',
        'alamat',
        'visibility', // bersifat public / rahasia (private)
        'created_by'
    ];
    // Relasi: kontak dimiliki oleh user tertentu (sekre)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
