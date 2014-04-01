<?php

namespace spec\Example;

use Example\Expense;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExpenseCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Example\ExpenseCalculator');
    }

    function it_adds_expenses_to_a_list(Expense $expense)
    {
        $this->add($expense);
    }

    function it_calculates_the_sum(Expense $expense1, Expense $expense2)
    {
        $expense1->getAmount()->shouldBeCalled()->willReturn(10);
        $expense2->getAmount()->shouldBeCalled()->willReturn(20);
        $this->add($expense1);
        $this->add($expense2);
        $this->sum()->shouldReturn(30);
    }

}
