<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table='Pelanggan';
    protected $primaryKey='id';
    protected $fillable=['nama','no_tlpn','status'];
}
