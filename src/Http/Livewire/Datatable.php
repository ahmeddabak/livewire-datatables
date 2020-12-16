<?php

namespace Ahmeddabak\LivewireDatatables\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $model;

    public function mount($model)
    {
        $this->model = $model;
    }

    public function getRowsProperty()
    {
        return $this->model::paginate(10);
    }

    public function render()
    {
        return view('datatables::datatable');
    }
}
