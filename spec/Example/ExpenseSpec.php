<?php

namespace spec\Example;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExpenseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Example\Expense');
    }

    function it_sets_and_gets_the_amount()
    {
        $this->setAmount(10);
        $this->getAmount()->shouldBe(10);
    }

    function it_throws_exception_if_amount_not_positive()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringSetAmount(-1);
    }
}
