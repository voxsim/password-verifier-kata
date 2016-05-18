<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NullVerifierSpec extends ObjectBehavior
{
    function it_returns_true_if_string_is_not_null()
    {
        $this->verify('a')->shouldReturn(true);
    }

    function it_returns_false_if_string_is_null()
    {
        $this->verify(null)->shouldReturn(false);
    }
}
