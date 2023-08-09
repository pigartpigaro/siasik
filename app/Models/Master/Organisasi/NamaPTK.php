<?php

namespace App\Models\Master\Organisasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaPTK extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    protected $table= 'nama_ptk';
}
