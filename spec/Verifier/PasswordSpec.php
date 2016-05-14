<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Verifier\Verifier;

class PasswordSpec extends ObjectBehavior
{
    const SHORT_PASSWORD = 'a';

    function it_should_be_larger_than_8_characters(Verifier $verifier)
    {
        $this->beConstructedThrough('create');
        $this->verify(self::SHORT_PASSWORD)->shouldReturn(false);
    }
}
