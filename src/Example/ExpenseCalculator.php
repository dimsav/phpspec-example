<?php

namespace Example;

class ExpenseCalculator
{
    private $expenses = array();
    public function add(Expense $expense)
    {
        $this->expenses[] = $expense;
    }

    public function sum()
    {
        $sum = 0;
        foreach ($this->expenses as $expense)
        {
            $sum += $expense->getAmount();
        }
        return $sum;
    }
}
