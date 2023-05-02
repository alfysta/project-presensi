<?php

namespace App\Http\Livewire;

use App\Models\Teacher as ModelsTeacher;
use Livewire\Component;
use Livewire\WithPagination;

class Teacher extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function render()
    {
        return view('livewire.teacher', [
            'teachers' => ModelsTeacher::where('nama', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
