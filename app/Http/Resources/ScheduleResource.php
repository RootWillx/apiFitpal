<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'Disponibilidad' => Str::upper($this->availability),
            'Fecha' => $this->available_at,//->format('d-m-Y')
            'Tipo de clase' => $this->class
        ];
    }
    public function with($request)
    {
        return [
            'Exist' => true,
        ];
    }
}
