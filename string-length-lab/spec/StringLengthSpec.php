<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringLengthSpec extends ObjectBehavior
{
  function it_should_return_7_in_an_array_for_Prosper()
  {
    $this->getLength('Prosper')->shouldBeEqualTo([7]);
  }

  function it_should_return_3_in_an_array_for_Mia()
  {
    $this->getLength('Mia')->shouldBeEqualTo([3]);
  }

  function it_should_return_4_and_7_in_an_array_for_Adam_and_Frankel()
  {
    $this->getLength(['Adam','Frankel'])->shouldBeEqualTo([4,7]);
  }
}
