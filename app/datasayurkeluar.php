<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datasayurkeluar extends Model
{
  protected $table = 'data_sayur_keluar';
  protected $primaryKey ='idSayurKeluar';
  protected $fillable = ['idHargajual','namaPenerima','kotaTujuan','namaSopir','notelpSopir','hargajual','jumlah','totalHarga'];
}
