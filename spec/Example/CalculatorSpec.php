<?php

namespace spec\Example;

use Example\Expense;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function let(Expense $expense)
    {
        $expense->getAmount()->willReturn(10);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Example\Calculator');
    }

    function it_accepts_expenses(Expense $expense)
    {
        $this->add($expense);
        $this->getSum()->shouldBe(10);
    }

    function it_calculates_the_sum(Expense $expense, Expense $expense1)
    {
        $expense1->getAmount()->shouldBeCalled()->willReturn(5);
        $this->add($expense);
        $this->add($expense1);
        $this->getSum()->shouldReturn(15);
    }
}
