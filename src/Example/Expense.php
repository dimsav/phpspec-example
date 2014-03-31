<?php

namespace Example;

class Expense
{
    private $amount;

    public function setAmount($amount)
    {
        if ($amount <= 0)
        {
            throw new \InvalidArgumentException("The amount $amount is not valid.");
        }
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }



}