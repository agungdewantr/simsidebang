<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datasayurmasuk extends Model
{
  protected $table = 'data_sayur_masuk';
  protected $primarykey ='idSayurMasuk';
  protected $fillable = ['jenis','namaPenjual','harga','jumlah','totalHarga'];
}
