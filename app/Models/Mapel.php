<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "mapel";
    protected $fillable = ['nama_mapel', 'id_guru'];

    // public function guru()
    // {
    //     return $this->belongsTo(Guru::class);
    // }
}
