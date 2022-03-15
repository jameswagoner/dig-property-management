<?php

namespace App\Units\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Units\Models\Unit;
use Illuminate\Contracts\View\View;

class UnitController extends Controller
{
    public function index(): View
    {
        $units = Unit::paginate();

        return view('manage.units.index')
            ->with('units', $units);
    }

    public function create(): View
    {
        return view('manage.units.form')
            ->with('unit', Unit::make());
    }

    public function show(Unit $unit): View
    {
        return view('manage.units.show')
            ->with('unit', $unit);
    }

    public function edit(Unit $unit): View
    {
        return view('manage.units.form')
            ->with('unit', $unit);
    }
}
