<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $primaryKey = "nip";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nama'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_guru', 'nip');
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class, 'id_guru', 'nip');
    }
}
