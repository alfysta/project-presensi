<?php

namespace App\Http\Livewire;

use App\Models\Student as ModelsStudent;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function render()
    {
        return view('livewire.student', [
            'students' => ModelsStudent::where('nama', 'like', '%' . $this->search . '%')->orWhere('nik', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
