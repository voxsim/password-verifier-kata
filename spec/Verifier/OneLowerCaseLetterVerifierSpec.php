<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneLowerCaseLetterVerifierSpec extends ObjectBehavior
{
    const LOWERCASE_STRING = 'a';
    const CAPITALIZED_STRING = 'Aa';
    const UPPERCASE_STRING = 'AA';
    const WITH_SOME_LOWERCASE_LETTERS_STRING = 'aAa';

    function it_returns_true_with_string_is_lowercase()
    {
        $this->verify(self::LOWERCASE_STRING)->shouldReturn(true);
    }

    function it_returns_true_if_string_has_one_lowercase_letter()
    {
        $this->verify(self::CAPITALIZED_STRING)->shouldReturn(true);
    }

    function it_returns_false_if_string_is_uppercase()
    {
        $this->verify(self::UPPERCASE_STRING)->shouldReturn(false);
    }

    function it_returns_true_if_string_has_multiple_lowercase_letters()
    {
        $this->verify(self::WITH_SOME_LOWERCASE_LETTERS_STRING)->shouldReturn(true);
    }
}
