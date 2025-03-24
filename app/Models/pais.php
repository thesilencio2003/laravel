<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    use HasFactory;
    
    protected $table = 'tb_pais';
    protected $primaryKey = 'pais_codi';
    public $incrementing = false; 
    protected $keyType = 'string';
    public $timestamps = false;
}
