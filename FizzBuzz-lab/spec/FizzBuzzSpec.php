<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
      $this->shouldHaveType('FizzBuzz');
    }

    function it_should_return_Fizz_for_number_divisible_by_3()
    {
      $this->doFizzBuzz(3)->shouldReturn("Fizz");
    }

    function it_should_return_Buzz_for_number_divisible_by_5()
    {
      $this->doFizzBuzz(5)->shouldReturn("Buzz");
    }

    function it_should_return_FizzBuzz_for_number_divisible_by_3_and_5()
    {
      $this->doFizzBuzz(15)->shouldReturn("FizzBuzz");
    }

    function it_should_return_7_since_it_is_indivisible_by_3_and_5()
    {
      $this->doFizzBuzz(7)->shouldReturn(7);
    }
}
