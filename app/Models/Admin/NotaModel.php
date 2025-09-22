<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class NotaModel extends Model
{
    //
    protected $fillable = [
        'nomor_nota',
        'perihal',
        'tanggal_dokumen',
        'file_path',
        'created_by'
    ];


    // Relasi: nota dibuat oleh user
    public function user () 
    {
        return $this ->belongsTo(User::class);
    }

}
