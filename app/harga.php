<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    protected $table = 'harga';
    protected $primarykey ='idHarga';
    protected $fillable = ['jenis','harga'];
}
