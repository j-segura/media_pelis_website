<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contenido;
use Livewire\Component;
use Livewire\WithPagination;

class ContenidosIndex extends Component
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
        $contenidos = Contenido::where('titulo', 'LIKE' , '%' .$this->search . '%')->latest('id')->paginate(10);
        return view('livewire.admin.contenidos-index', compact('contenidos'));
    }
}
