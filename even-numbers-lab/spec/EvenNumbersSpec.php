<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EvenNumbersSpec extends ObjectBehavior
{

    function it_should_return_true_for_2()
    {
      $this->isEven(2)->shouldBe(true);
    }

    function it_should_return_true_for_0()
    {
      $this->isEven(0)->shouldBe(true);
    }

    function it_should_return_true_for_minus_2()
    {
      $this->isEven(-2)->shouldBe(true);
    }

    function it_should_return_true_for_4()
    {
      $this->isEven(4)->shouldBe(true);
    }

    function it_should_return_true_for_minus_10()
    {
      $this->isEven(-10)->shouldBe(true);
    }

    function it_should_return_false_for_minus_0_point_2()
    {
      $this->isEven(-0.2)->shouldBe(false);
    }

    function it_should_return_false_for_minus_0_point_16()
    {
      $this->isEven(-0.16)->shouldBe(false);
    }
}
