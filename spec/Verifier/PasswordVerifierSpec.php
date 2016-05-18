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
    const LETTERS_PASSWORD = 'aA';

    function it_should_be_larger_than_8_characters()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::SHORT_PASSWORD)->shouldReturn(false);
    }

    function it_should_be_not_null()
    {
        $this->beConstructedThrough('create');
        $this->verify(null)->shouldReturn(false);
    }

    function it_should_have_one_uppercase_letter()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::LOWERCASE_PASSWORD)->shouldReturn(false);
    }

    function it_should_have_one_lowercase_letter()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::UPPERCASE_PASSWORD)->shouldReturn(false);
    }

    function it_should_have_one_number()
    {
        $this->beConstructedThrough('create');
        $this->verify(self::LETTERS_PASSWORD)->shouldReturn(false);
    }
}
