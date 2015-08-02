<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MissingNumberSpec extends ObjectBehavior
{
    function it_should_return_0_for_empty_list()
    {
      $this->findMissing([],[])->shouldBe(0);
    }

    function it_should_return_0_for_lists_with_the_same_value()
    {
      $this->findMissing([54],[54])->shouldBe(0);
    }

    function it_should_return_11_for_1_and_8_in_an_Array_and_1_and_8_and_11_in_another_Array()
    {
      $this->findMissing([1,8],[1,8,11])->shouldBe(11);
    }

    function it_should_return_66_for_9_44_11_64_in_first_Array_and_9_11_66_64_44_in_another_Array()
    {
      $this->findMissing([9,44,11,64],[9,11,66,64,44])->shouldBe(66);
    }
}
