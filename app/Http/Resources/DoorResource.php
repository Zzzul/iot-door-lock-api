<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoorResource extends JsonResource
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
            'open' => $this->open->format('d/m/Y H:i:s'),
            'closed' => $this->closed ? $this->closed->format('d/m/Y H:i:s') : null,
            'access' => $this->access ? "✅" : "❌",
            'interval' => $this->interval,
            'user' => $this->user,
        ];
    }

    public function with($request)
    {
        return ['message' => 'success'];
    }
}
