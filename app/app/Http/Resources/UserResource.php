<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'dateOfbarth' => $this->dateOfbarth,
            'address' => $this->address,
            'photo' => $this->photo,
            'is_verified' => $this->is_verified,
            'status' => $this->status,
            'nationality' => $this->nationality,
            'referral_code'=>$this->referral_code,
            'created_at' => date("d M Y h:i A", strtotime($this->created_at))
        ];
    }
}
