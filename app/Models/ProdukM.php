<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukM extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'id' ,'nama_produk', 'harga_produk'
    ];
}
