<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LogC;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\UserC;
use App\Http\Controllers\ProdukC;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\TransaksiiC;
use Illuminate\Support\Facades\Route;

route::get('/', function(){
    return 'Hello World API !';
});

route::get('/product',[ProdukC::class,'index'])->middleware(['auth:sanctum']);
route::get('/product/{id}',[ProdukC::class,'detail'])->middleware(['auth:sanctum']);

route::get('/transactions',[TransaksiiC::class,'index'])->middleware(['auth:sanctum']);
route::get('/transactions/{id}',[TransaksiiC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('admin');
});

route::get('/log',[LogC::class,'index']);
route::get('/log/{id}',[LogC::class,'detail']);

route::get('/users',[UserC::class,'index']);
route::get('/users/{id}',[UserC::class,'detail']);

route::get('/kasir',function(){
    return Hash::make('kasir');
});

    route::get('/owner',function(){
        return Hash::make('owner');
});