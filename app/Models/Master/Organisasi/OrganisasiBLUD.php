<?php

namespace App\Models\Master\Organisasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiBLUD extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    protected $table= 'organisasi';
}
