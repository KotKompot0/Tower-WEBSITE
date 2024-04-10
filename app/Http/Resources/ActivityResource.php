<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'photo_preview' => $this->photo_preview,
            'photo_round' => $this->photo_round,
            'properties' => PropertyResource::collection($this->properties),
            'sliders' => SliderResource::collection($this->sliders),
            'user_admin' => new UserResource($this->user),
            'icon' => $this->icon,
            'slug' => $this->slug,
        ];
    }
}
