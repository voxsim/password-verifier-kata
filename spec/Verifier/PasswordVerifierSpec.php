<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Verifier\Verifier;

class PasswordVerifierSpec extends ObjectBehavior
{
    const SHORT_PASSWORD = 'a';
    const LOWERCASE_PASSWORD = 'aaaaaaaaa';
    const LONG_LETTERS_PASSWORD = 'Aaaaaaaaa';
    const ALPHANUMBER_PASSWORD = 'a12345678';
    const SHORT_ALPHANUMBER_PASSWORD = 'a1A';

    function it_should_be_not_null()
    {
        $this->beConstructedThrough('create');
        $this->verify(null)->shouldReturn(false);
    }

    function it_should_be_larger_than_8_characters_and_one_lowercase_and_one_uppercase()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::LONG_LETTERS_PASSWORD)->shouldReturn(true);
    }

    function it_should_be_larger_than_8_characters_and_one_lowercase_and_with_numbers()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::ALPHANUMBER_PASSWORD)->shouldReturn(true);
    }

    function it_should_have_one_uppercase_letter_and_one_number_and_one_lowercase()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::SHORT_ALPHANUMBER_PASSWORD)->shouldReturn(true);
    }
}
