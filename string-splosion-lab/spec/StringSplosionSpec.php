<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringSplosionSpec extends ObjectBehavior
{
    function it_should_manipulate_the_string_Code_to_CCoCodCode()
    {
      $this->beConstructedWith("Code");
      $this->manipulate()->shouldBeEqualTo("CCoCodCode");
    }

    function it_should_manipulate_abc_to_aababc()
    {
      $this->beConstructedWith("abc");
      $this->manipulate()->shouldBeEqualTo("aababc");
    }

    function it_should_manipulate_andela_to_aanandandeandelandela()
    {
      $this->beConstructedWith("andela");
      $this->manipulate()->shouldBeEqualTo("aanandandeandelandela");
    }
}
