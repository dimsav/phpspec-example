<?php

namespace Example;

class Expense
{
    private $amount;

    public function setAmount($amount)
    {
        if ($amount <= 0)
        {
            throw new \InvalidArgumentException("The amount is not positive");
        }
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
