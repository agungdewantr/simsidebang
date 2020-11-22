<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prediksi extends Model
{
  protected $table = 'prediksi';
  protected $primaryKey ='idprediksi';
  protected $fillable = ['idJenisSayur','dataBulanPertama','dataBulanKedua','dataBulanKetiga','bulanPrediksi','tahunPrediksi','hasilPrediksi','created_at'];
}
