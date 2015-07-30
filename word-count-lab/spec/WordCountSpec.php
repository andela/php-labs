<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WordCountSpec extends ObjectBehavior
{
    function it_counts_one_word()
    {
      $expectedCounts = ["word" => 1];
      $this->words("word")->shouldEqual($expectedCounts);
    }

    function it_counts_one_of_each()
    {
      $expectedCounts = ["one" => 1, "of" => 1, "each" => 1];
      $this->words("word")->shouldEqual($expectedCounts);
    }

    function it_counts_multiple_occurrences()
    {
      $expectedCounts = ["one" => 1, "fish" => 4, "two" => 1, "red" => 1, "blue" => 1];
      $this->words("one fish two fish red fish blue fish")->shouldEqual($expectedCounts);
    }

    function it_includes_punctuation()
    {
      $expectedCounts = ["car" => 1, ":" => 2, "carpet" => 1, "as" => 1, "java" => 1, "php!!&@$%^&" => 1];
      $this->words("car : carpet as java : php!!&@$%^&")->shouldEqual($expectedCounts);
    }

    function it_includes_numbers()
    {
      $expectedCounts = ["testing" => 2, 1 => 1, 2 => 1];
      $this->words("testing 1 2 testing")->shouldEqual($expectedCounts);
    }

    function it_respects_case()
    {
      $expectedCounts = ["go" => 1, "Go" => 1, "GO" => 1];
      $this->words("go Go GO")->shouldEqual($expectedCounts);
    }

    function it_counts_properly_international_characters()
    {
      $expectedCounts = ["¡Hola!" => 1, "¿Qué" => 1, "tal?" => 1, "Привет!" => 1];
       $this->words("¡Hola! ¿Qué tal? Привет!")->shouldEqual($expectedCounts);
    }

    function it_counts_multiline()
    {
      $expectedCounts = ["hello" => 1, "world" => 1];
      $this->words("hello\nworld")->shouldEqual($expectedCounts);
    }

    function it_counts_tabs()
    {
      $expectedCounts = ["hello" => 1, "world" => 1];
      $this->words("hello\tworld")->shouldEqual($expectedCounts);
    }

    function it_counts_multiple_spaces_as_one()
    {
      $expectedCounts = ["hello" => 1, "world" => 1];
      $this->words("hello  world")->shouldEqual($expectedCounts);
    }

    function it_handles_properties_that_exist_on_Objects_prototype()
    {
      $expectedCounts = ["reserved" => 1, "words" => 1, "like" => 1, "prototype" => 1, "and" => 1, "toString" => 1, "ok?" => 1];
      $this->words("reserved words like prototype and toString ok?")->shouldEqual($expectedCounts);
    }
}
