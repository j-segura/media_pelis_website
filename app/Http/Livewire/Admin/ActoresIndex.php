<?php

namespace App\Http\Livewire\Admin;

use App\Models\Actor;
use Livewire\Component;
use Livewire\WithPagination;

class ActoresIndex extends Component
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
        $actors = Actor::where('name', 'LIKE' , '%' .$this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.actores-index', compact('actors'));
    }
}
