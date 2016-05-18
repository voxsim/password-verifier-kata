<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Verifier\Verifier;

class PasswordVerifierSpec extends ObjectBehavior
{
    const SHORT_PASSWORD = 'a';
    const LOWERCASE_PASSWORD = 'aaaaaaaaa';
    const UPPERCASE_PASSWORD = 'AAAAAAAAA';
    const NUMBER_PASSWORD = '012345678';
    const LETTERS_PASSWORD = 'aA';
    const UPPER_NUMBER_PASSWORD = 'A1';
    const LOWER_NUMBER_PASSWORD = 'a2';

    function it_should_be_not_null()
    {
        $this->beConstructedThrough('create');
        $this->verify(null)->shouldReturn(false);
    }

    function it_should_be_larger_than_8_characters_and_lowercase()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::LOWERCASE_PASSWORD)->shouldReturn(true);
    }

    function it_should_be_larger_than_8_characters_and_uppercase()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::UPPERCASE_PASSWORD)->shouldReturn(true);
    }

    function it_should_be_larger_than_8_characters_and_with_numbers()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::NUMBER_PASSWORD)->shouldReturn(true);
    }

    function it_should_have_one_uppercase_letter_and_one_lowercase_letter()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::LETTERS_PASSWORD)->shouldReturn(true);
    }

    function it_should_have_one_uppercase_letter_and_one_number()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::UPPER_NUMBER_PASSWORD)->shouldReturn(true);
    }

    function it_should_have_one_lowercase_letter_and_one_number()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::LOWER_NUMBER_PASSWORD)->shouldReturn(true);
    }
}
