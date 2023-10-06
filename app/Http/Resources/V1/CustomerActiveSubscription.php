<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerActiveSubscription extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "expiry_date" => $this->expiry_date,
            "created_at"  => $this->created_at,
            "status"      => $this->status
        ];
    }
}
