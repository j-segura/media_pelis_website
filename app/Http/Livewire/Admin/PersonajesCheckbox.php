<?php

namespace App\Http\Livewire\Admin;

use App\Models\Personaje;
use Livewire\Component;
use Livewire\WithPagination;

class PersonajesCheckbox extends Component
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
        $personajes = Personaje::where('name', 'LIKE' , '%' .$this->search . '%')->latest('id')->paginate(7);
        return view('livewire.admin.personajes-checkbox', compact('personajes'));
    }
}
