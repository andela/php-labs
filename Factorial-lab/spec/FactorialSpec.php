<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorialSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
      $this->shouldHaveType('Factorial');
    }

    function it_should_return_120_As_5_Factorial()
    {
      $this->getFactorial(5)->shouldBeEqualTo(120);
    }

    function it_should_return_3628800_As_10_Factorial()
    {
      $this->getFactorial(10)->shouldBeEqualTo(3628800);
    }

    function it_should_return_720_As_6_Factorial()
    {
      $this->getFactorial(6)->shouldBeEqualTo(720);
    }

    function it_should_return_2_As_2_Factorial()
    {
      $this->getFactorial(2)->shouldBeEqualTo(2);
    }
}
