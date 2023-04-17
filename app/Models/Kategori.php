<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transaksis()
    {

        return $this->hasMany(Transaksi::class, 'id_kategori', 'id');
    }
}
