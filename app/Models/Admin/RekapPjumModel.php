<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RekapPjumModel extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'tanggal',
        'deskripsi',
        'file_path',
        'created_by'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
