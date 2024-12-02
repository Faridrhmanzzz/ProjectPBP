<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $primaryKey = null;
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'kodeMK',
        'ruang',
        'hari',
        'mulai',
        'selesai',
        'kelas',
        'thnAjar',
        'kuota',
    ];

    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class, 'kodeMK', 'kodeMK');
    }

    public function ruang()
    {
        return $this->hasOne(ruang::class);
    }
}