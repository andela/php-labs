<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MaxMinNumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
      $this->shouldHaveType('MaxMinNumber');
    }

    function it_should_return_1_and_4_in_an_Array_for_1_2_3_4_in_a_given_Array()
    {
      $this->findMinMax([1,2,3,4])->shouldReturn([1,4]);
    }

    function it_should_return_4_6_in_an_Array_for_6_4_in_a_given_Array()
    {
      $this->findMinMax([6,4])->shouldReturn([4,6]);
    }

    function it_should_return_2_and_78_in_an_Array_for_4_67_2_7_54_78_64_9_in_a_given_Array()
    {
      $this->findMinMax([4,67,2,7,54,78,64,9])->shouldReturn([2,78]);
    }

    function it_should_return_7_in_an_Array_for_7_7_7_7_7_in_a_given_Array()
    {
      $this->findMinMax([7,7,7,7,7])->shouldReturn([7]);
    }
}
