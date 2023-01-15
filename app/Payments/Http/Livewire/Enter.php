<?php

namespace App\Payments\Http\Livewire;

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
    public $category;
    public $transacted_at;
    public $type;
    public $unit_id;

    public function rules(): array
    {
        return [
            'amount'        => ['required', 'numeric'],
            'category'      => ['required'],
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

    public function cancel(): void
    {
        $this->redirect(route('manage.payments.index'));
    }

    public function save($new = false): void
    {
        $data = $this->validate();

        Arr::set($data, 'type', Transaction::TYPE_RENT);
        Arr::set($data, 'category', $this->category);
        Arr::set($data, 'transacted_at', Carbon::parse($this->transacted_at));

        Transaction::create($data);

        if ($new) {
            $this->redirectRoute('manage.payments.enter');
        } else {
            $this->redirectRoute('manage.payments.index');
        }
    }

    public function render(): View
    {
        return view('livewire.manage.payments.enter')
            ->layoutData(['title' => 'New Payment']);
    }
}
