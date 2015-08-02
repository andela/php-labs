<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeCheckerSpec extends ObjectBehavior
{
    function it_should_return_true_for_41()
    {
      $this->beConstructedWith(41);
      $this->isPrime()->shouldBe(true);
    }

    function it_should_return_true_for_1001()
    {
      $this->beConstructedWith(1001);
      $this->isPrime()->shouldBe(false);
    }

    function it_should_return_true_for_68()
    {
      $this->beConstructedWith(68);
      $this->isPrime()->shouldBe(false);
    }

    function it_should_return_true_for_3()
    {
      $this->beConstructedWith(3);
      $this->isPrime()->shouldBe(true);
    }

    function it_should_return_false_for_empty_string()
    {
      $this->beConstructedWith("");
      $this->isPrime()->shouldBe(false);
    }
}
