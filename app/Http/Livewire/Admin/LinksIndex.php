<?php

namespace App\Http\Livewire\Admin;

use App\Models\Plataformalink;
use Livewire\Component;
use Livewire\WithPagination;

class LinksIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $plataformalinks = Plataformalink::where('plataforma', 'LIKE' , '%' .$this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.links-index', compact('plataformalinks'));
    }
}
