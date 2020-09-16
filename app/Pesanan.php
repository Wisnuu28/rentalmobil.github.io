<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "pesanan";

    protected $fillable = ['name' , 'email' , 'mobil' , 'nomor_hp' , 'alamat' , 'tanggal_pesan' , 'selesai_pesan'];
}
