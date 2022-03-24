<?php

namespace App\Labor\Http\Livewire;

use App\Models\Transaction;
use App\Units\Models\Unit;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Enter extends Component
{
    public $amount;
    public $description;
    public $transacted_at;
    public $unit_id;

    public function rules(): array
    {
        return [
            'amount'        => ['required', 'numeric'],
            'description'   => ['required'],
            'transacted_at' => ['required', 'date_format:Y-m-d'],
            'unit_id'       => ['sometimes', 'nullable', Rule::exists('units', 'id')],
        ];
    }

    public function getUnitsProperty(): Collection
    {
        return Unit::all();
    }

    public function saveAndNew(): void
    {
        $this->save(true);
    }

    public function save($new = false): void
    {
        $data = $this->validate();

        Arr::set($data, 'user_id', 13);
        Arr::set($data, 'type', Transaction::TYPE_LABOR);
        Arr::set($data, 'category', Transaction::TYPE_LABOR);
        Arr::set($data, 'transacted_at', Carbon::parse($this->transacted_at));

        Transaction::create($data);

        if ($new) {
            $this->redirectRoute('manage.labor.enter');
        } else {
            $this->redirectRoute('manage.labor.index');
        }
    }

    public function render(): View
    {
        return view('livewire.manage.labor.enter')
            ->layoutData(['title' => 'New Labor Expense']);
    }
}
