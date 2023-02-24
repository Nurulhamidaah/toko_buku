<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdukR extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama_produk' =>$this->nama_produk,
            'harga_produk' =>$this->harga_produk,
            'date_relase' => date_format($this->created_at, 'd-m-Y h:i:s')
            ];
    }
}