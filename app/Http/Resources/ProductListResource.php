<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductListResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param \Illuminate\Http\Request $request
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    // return parent::toArray($request);
    return [
      'id' => $this->id,
      'title' => $this->title,
      'image_url' => $this->image ?: null,
      'price' => $this->price,
      'updated_at' => (new \DateTime($this->updated_at))->format('Y-m-d H:i:s'),
    ];
  }
}
