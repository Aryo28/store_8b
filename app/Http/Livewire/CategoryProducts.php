<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;
    public $products;
    public $products2 = [];

    public function loadPost(){
        $this->products2 = $this->category->products()->where('status', 2)->get();
        $this->emit('glider', $this->category->id);
    }


    public function render()
    {
        
        return view('livewire.category-products');
    }
}
