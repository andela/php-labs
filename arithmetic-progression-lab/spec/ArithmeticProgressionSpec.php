<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArithmeticProgressionSpec extends ObjectBehavior
{
  function it_is_initializable()
  {
    $this->shouldHaveType('ArithmeticProgression');
  }

  function it_should_return_0_for_an_empty_Array()
  {
    $this->aritGeo([])->shouldBeEqualTo(0);
  }

  function it_should_return_Arithmetic_for_2_4_6_8_10_in_an_Array()
  {
    $this->aritGeo([2, 4, 6, 8, 10])->shouldBeEqualTo('Arithmetic');
  }

  function it_should_return_Arithmetic_for_5_11_17_23_29_35_41_in_an_Array()
  {
    $this->aritGeo([5, 11, 17, 23, 29, 35, 41])->shouldBeEqualTo('Arithmetic');
  }

  function it_should_return_Geometric_for_2_6_18_54_162_in_an_Array()
  {
    $this->aritGeo([2, 6, 18, 54, 162])->shouldBeEqualTo('Geometric');
  }

  function it_should_return_minus_1_for_1_2_3_5_8_in_an_Array()
  {
    $this->aritGeo([1, 2, 3, 5, 8])->shouldBeEqualTo(-1);
  }

  function it_should_return_minus_1_for_1_8_27_64_125_in_an_Array()
  {
    $this->aritGeo([1, 8, 27, 64, 125])->shouldBeEqualTo(-1);
  }
}
