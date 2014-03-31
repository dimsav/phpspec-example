<?php

namespace Example;

class Calculator
{
    /**
     * @var Expense[]
     */
    private $expenses = array();

    public function add(Expense $expense)
    {
        $this->expenses[] = $expense;
    }

    public function getSum()
    {
        $sum = 0;
        foreach ($this->expenses as $expense)
        {
            $sum += $expense->getAmount();
        }
        return $sum;
    }
}
