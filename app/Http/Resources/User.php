<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
//use PhotoCollection;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'bio' => $this->bio,
            'profile_picture' => $this->profile_picture,
            'album' => $this->photos,
        ];
    }
}
