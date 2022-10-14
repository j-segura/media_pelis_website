<?php

namespace App\Http\Livewire\Admin;

use App\Models\Productor;
use Livewire\Component;
use Livewire\WithPagination;

class ProductorsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $productors = Productor::where('name', 'LIKE' , '%' .$this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.productors-index', compact('productors'));
    }
}
