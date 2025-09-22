<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FilesModel extends Model
{
    //

    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'kategori', //materi, dll
        'judul',
        'file_path',
        'visibility' //bersifat public / rahasia (private)
    ];
// Relasi: attachment milik 1 agenda
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
