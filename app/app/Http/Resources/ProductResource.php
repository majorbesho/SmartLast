<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'slug'=>$this->slug,
            'purl'=>'https://smartboxuae.ae/product/share/'.$this->slug,
            'description'=>$this->discreption,
            'image'=>$this->photo,
            'status'=>$this->status,
            'Caturl'=>$this->Caturl,
            'sdate'=>$this->sdate,
            'edate'=>$this->edate,
            'price'=>$this->price,
            'showPrice'=>$this->showPrice,
            'periodID'=>$this->periodID,
            'stock'=>$this->stock,
            'supplier'=>$this->supplier,
            'created_at' => $this->created_at
        ];
    }
}
