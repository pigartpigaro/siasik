<?php

namespace App\Models\Master\Kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanBLUD extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    protected $table= 'kegiatan_blud';
}
