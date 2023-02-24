<?php

namespace App\Http\Controllers;

use App\Models\TransaksiiM;
use Illuminate\Http\Request;
use App\Http\Resources\TransaksiiR;

class TransaksiiC extends Controller
{
    public function index(){
        $transactions = TransaksiiM::all();
        return TransaksiiR::collection($transactions);
    }
    public function detail($id){
        $transactions = TransaksiiM::findOrfail($id);
        return new TransaksiiR($transactions);
    }
}
