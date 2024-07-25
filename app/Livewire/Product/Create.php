<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Http\Requests\CreateProductRequest;

class Create extends Component
{
    // attribut
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:3')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    public $image;
    public function render()
    {
        return view('livewire.product.create');
    }

    public function store(){
        $validate = $this->validate();

        Product::create($validate);
        $this->dispatch('productStored');
    }
}
