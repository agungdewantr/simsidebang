<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hargabeli extends Model
{
  protected $table = 'hargabeli';
  protected $primaryKey ='idHargabeli';
  protected $fillable = ['jenis','harga'];
}
