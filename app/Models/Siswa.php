<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $primaryKey = "nis";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nama'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}

