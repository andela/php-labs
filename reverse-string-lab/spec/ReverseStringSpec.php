<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReverseStringSpec extends ObjectBehavior
{
    function it_should_return_null_for_empty_string()
    {
      $this->reverse('')->shouldBeEqualTo(null);
    }

    function it_should_return_true_for_anna()
    {
      $this->reverse('anna')->shouldBeEqualTo(true);
    }

    function it_should_return_true_for_NAN()
    {
      $this->reverse('NAN')->shouldBeEqualTo(true);
    }

    function it_should_return_true_for_civic()
    {
      $this->reverse('civic')->shouldBeEqualTo(true);
    }

    function it_should_return_skoob_for_books()
    {
      $this->reverse('books')->shouldBeEqualTo('skoob');
    }

    function it_should_return_rayadan_for_nadayar()
    {
      $this->reverse('nadayar')->shouldBeEqualTo('rayadan');
    }
}
