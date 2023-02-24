<?php

namespace App\Http\Controllers;

use App\Models\LogM;
use Illuminate\Http\Request;
use App\Http\Resources\LogR;

class logC extends Controller
{
    public function index(){
        $log = LogM::all();
        // return response()-> json($log);
        return LogR::collection($log);
    }

        public function detail($id){
           $log = LogM::findOrFail($id);
        return new LogR($log);
        }
}