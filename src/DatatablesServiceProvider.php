<?php

namespace Ahmeddabak\LivewireDatatables;

use Ahmeddabak\LivewireDatatables\Http\Livewire\Datatable;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class DatatablesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/livewire', 'datatables');

        Livewire::component('datatable', Datatable::class);
    }
}
