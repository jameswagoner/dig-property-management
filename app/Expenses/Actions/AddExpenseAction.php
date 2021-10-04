<?php

namespace App\Expenses\Actions;

use App\Expenses\Models\Expense;

class AddExpenseAction
{
    public function __invoke($data): Expense
    {
        return Expense::create($data);
    }
}
