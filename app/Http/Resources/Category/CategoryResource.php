<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
   
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            'href' => [
                'products' => route('product.index',$this->id)
            ]
        ];
    }
}
