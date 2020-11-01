<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datasayurmasuk extends Model
{
  protected $table = 'data_sayur_masuk';
  protected $primaryKey ='idSayurMasuk';
  protected $fillable = ['jenis','namaPenjual','hargabeli','jumlah','totalHarga'];
}
