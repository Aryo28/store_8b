<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Size;

class AddCartItemSize extends Component
{
    public $product, $sizes;
    public $colors = [];
    public $size_id = "";
    public $color_id = "";
    public $qty = 1;
    public $quantity = 0;

    public function updatedSizeId($value)
    {
        $size = Size::find($value);
        $this->colors = $size->colors;
    }
    public function updatedColorId($value)
    {
        $size = Size::find($this->size_id);
        $this->quantity = $size->colors->find($value)->pivot->quantity;
    }

    public function mount()
    {
        $this->sizes = $this->product->size;
    }

    public function increment()
    {
        $this->qty++;
    }
    public function decrement()
    {
        $this->qty--;
    }

    public function render()
    {
        return view('livewire.add-cart-item-size');
    }
}
