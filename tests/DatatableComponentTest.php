<?php

namespace Ahmeddabak\LivewireDatatables\Tests;

use Ahmeddabak\LivewireDatatables\DatatablesServiceProvider;
use Ahmeddabak\LivewireDatatables\Http\Livewire\Datatable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Livewire;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase;

class DatatableComponentTest extends TestCase
{

    /** @test */
    public function component_class_loaded()
    {
        $this->assertTrue(class_exists(Datatable::class));
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            DatatablesServiceProvider::class,
        ];
    }
}
