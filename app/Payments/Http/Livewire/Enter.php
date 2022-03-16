<?php

namespace App\Payments\Http\Livewire;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Enter extends Component
{
    public $amount;
    public $business_name;
    public $category;
    public $transacted_at;
    public $type;
    public $unit_id;

    public function rules(): array
    {
        return [
            'amount'        => ['required', 'numeric'],
            'business_name' => ['sometimes', 'nullable'],
            'category'      => ['required'],
            'transacted_at' => ['required', 'date_format:Y-m-d'],
            'unit_id'       => ['sometimes', 'nullable', Rule::exists('units', 'id')],
        ];
    }

    public function saveAndNew(): void
    {
        $this->save(true);
    }

    public function save($new = false): void
    {
        $data = $this->validate();

        Arr::set($data, 'type', Transaction::TYPE_RENT);
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
