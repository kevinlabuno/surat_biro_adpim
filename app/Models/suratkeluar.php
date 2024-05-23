<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratkeluar extends Model
{
    use Moderatable;
    protected $table = 'suratkeluar';
    protected $fillable = ['jenis_surat','file','namasuratklr'
    ,'nosurat','pengirim','namapengirim','perihal','tertuju',
    'tanggalklr','status','status','komen'];
}
