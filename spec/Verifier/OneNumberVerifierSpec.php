<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneNumberVerifierSpec extends ObjectBehavior
{
    const LETTERS_STRING = 'a';
    const NUMBER_STRING = '1';
    const ALPHANUMBER_STRING = '1a1';

    function it_returns_true_if_string_has_one_number()
    {
        $this->verify(self::NUMBER_STRING)->shouldReturn(true);
    }

    function it_returns_false_if_string_has_only_letters()
    {
        $this->verify(self::LETTERS_STRING)->shouldReturn(false);
    }

    function it_returns_true_if_string_has_at_least_one_number()
    {
        $this->verify(self::ALPHANUMBER_STRING)->shouldReturn(true);
    }
}
