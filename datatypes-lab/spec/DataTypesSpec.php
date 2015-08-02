<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prosper;

class DataTypesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
      $this->shouldHaveType('DataTypes');
    }

    function it_should_return_no_value_for_NULL()
    {
      $this->getDataTypes(NULL)->shouldReturn('no value');
    }

    function it_should_return_true_for_true()
    {
      $this->getDataTypes(true)->shouldBe(true);
    }

    function it_should_return_false_for_false()
    {
      $this->getDataTypes(false)->shouldBe(false);
    }

    function it_should_return_object_for_new_Prosper()
    {
      $prosper = new Prosper;
      $this->getDataTypes($prosper)->shouldReturn('This is an Object');
    }

    function it_should_return_string_for_Andela()
    {
      $this->getDataTypes("Andela")->shouldBeString();
    }

    function it_should_return_NULL_for_empty_Array()
    {
      $this->getDataTypes([])->shouldReturn(NULL);
    }

    function it_should_return_NULL_for_array_with_items_less_than_3()
    {
      $this->getDataTypes([7,4])->shouldReturn(NULL);
    }

    function it_should_return_the_length_of_an_empty_String()
    {
      $this->getDataTypes('')->shouldBe(0);
    }

    function it_should_return_the_length_of_555(){
      $this->getDataTypes('555')->shouldBe(3);
    }

    function it_should_return_less_than_100_for_44()
    {
      $this->getDataTypes(44)->shouldReturn('less than 100');
    }

    function it_should_return_more_than_100_for_231()
    {
      $this->getDataTypes(231)->shouldReturn('more than 100');
    }

    function it_should_return_equal_to_100_for_100()
    {
      $this->getDataTypes(100)->shouldReturn('equal to 100');
    }
}
