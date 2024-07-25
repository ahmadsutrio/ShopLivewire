<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url(except:'',history:true)]
    public $search = '' ;

    protected $listeners = [
            'closeFormCreate' => 'closeFormCreate',
            'productStored' => 'productStoredHendler',
            
    ];

    public $visibleFormCreate;

    public function closeFormCreate(){
        $this->visibleFormCreate = false;
    }
    public function productStoredHendler(){
        $this->visibleFormCreate = false;
        session()->flash('message', 'your product was stored');
    }


    public $paginate = 10;


    public function render()
    {
        return view('livewire.product.index',[
            'data'=>$this->search === null ? 
                    Product::latest()->paginate($this->paginate) :
                    Product::where('title','like','%'.$this->search.'%')->paginate($this->paginate)
        ]);
    }
}
