<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    public static $wrap = 'job';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'location' => $this->location,
            'link' => $this->link,
            'desc' => $this->desc,
            'pinned' => $this->pinned,
            'company' => $this->user->company,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
