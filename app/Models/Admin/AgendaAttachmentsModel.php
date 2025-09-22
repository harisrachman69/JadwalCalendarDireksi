<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgendaAttachmentsModel extends Model
{
    //

    use HasFactory;
    
    protected $fillable = [
        'agenda_id',
        'file_path',
        'file_name',
        'file_type',
    ];

    // Relasi: attachment milik 1 agenda
     public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
}
