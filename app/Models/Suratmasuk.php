<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    use HasFactory;
    public $table = "suratmasuk";
 
    protected $fillable = [
        'file',
        'namasuratmsk',
        'pengirim',
        'namapengirim',
        'nosurat',
        'perihal',
        'tertuju',
        'tanggalmsk',
    ];
}
