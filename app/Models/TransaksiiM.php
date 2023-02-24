<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiiM extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'id', 'id_produk', 'nama_pelanggan'
    ];
}
