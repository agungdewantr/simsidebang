<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    protected $table = 'harga';
    protected $primaryKey ='idHarga';
    protected $fillable = ['jenis','harga'];
}
