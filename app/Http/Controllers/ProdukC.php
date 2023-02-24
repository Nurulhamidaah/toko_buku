<?php

namespace App\Http\Controllers;

use App\Models\ProdukM;
use Illuminate\Http\Request;
use App\Http\Resources\ProdukR;

class ProdukC extends Controller
{
    public function index(){
        $product = ProdukM::all();
        // return response()-> json($product);
        return ProdukR::collection($product);
    }

    public function detail($id){
        $product = ProdukM::findOrFail($id);
    return new ProdukR($product);
    }
}