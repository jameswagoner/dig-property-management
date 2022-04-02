<?php

namespace App\Units\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Units\Models\Unit;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function store(Request $request): RedirectResponse
    {
        Unit::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'rental_amount' => $request->input('rental_amount'),
        ]);

        return redirect()->route('manage.units.index');
    }

    public function show(Unit $unit): View
    {
        $payments = $unit->transactions()->rent()->latest('transacted_at')->take(5)->get();
        $expenses = $unit->transactions()->expense()->latest('transacted_at')->take(5)->get();
        $laborExpenses = $unit->transactions()->labor()->latest('transacted_at')->take(5)->get();

        return view('manage.units.show')
            ->with('unit', $unit)
            ->with('payments', $payments)
            ->with('expenses', $expenses)
            ->with('laborExpenses', $laborExpenses);
    }

    public function edit(Unit $unit): View
    {
        return view('manage.units.form')
            ->with('unit', $unit);
    }

    public function update(Unit $unit, Request $request): RedirectResponse
    {
        $unit->name = $request->input('name');
        $unit->address = $request->input('address');
        $unit->setMeta('rental_amount', $request->input('rental_amount') * 100);

        $unit->save();

        return redirect()->route('manage.units.index');
    }
}
