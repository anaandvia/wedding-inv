<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $table = 'tblundangan';
    protected $primaryKey = 'undanganid';

    protected $fillable = [
        'undanganid',
        'name',
        'comment',
        'attend' 
    ];
}
