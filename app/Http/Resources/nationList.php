<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class nationList extends JsonResource
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
"nationId"=>$this->nationId,
"nationName"=>$this->nationName


        ];
    }
}
