<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hargajual extends Model
{
  protected $table = 'hargajual';
  protected $primaryKey ='idHargajual';
  protected $fillable = ['jenis','harga'];
}
