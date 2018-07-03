<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\Resource;

class CategoryCollection extends Resource
{
    
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            'href' => [
                'link' => route('category.index',$this->id)
            ],
        ];
    }
}
