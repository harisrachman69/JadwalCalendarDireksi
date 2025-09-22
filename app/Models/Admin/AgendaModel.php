<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgendaModel extends Model
{
    //

    use HasFactory;
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'direksi_id',
        'created_by',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'sifat',
    ];

    // Relasi: agenda milik direksi tertentu
    public function direksi()
    {
        return $this->belongsTo(Direksi::class);
    }

    // Relasi: agenda dibuat oleh user tertentu
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}


// 