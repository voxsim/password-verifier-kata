<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthLargerThenVerifierSpec extends ObjectBehavior
{
    const THRESHOLD = 1;
    const SHORT_STRING = '';
    const STRING_WITH_LENGTH_EQUAL_TO_THRESHOLD = 'a';
    const LARGE_STRING = 'aa';

    function let()
    {
        $this->beConstructedWith(self::THRESHOLD);
    }

    function it_returns_false_with_string_shorter_than_threshold()
    {
        $this->verify(self::SHORT_STRING)->shouldReturn(false);
    }

    function it_returns_false_with_string_that_has_length_equal_to_threshold()
    {
        $this->verify(self::STRING_WITH_LENGTH_EQUAL_TO_THRESHOLD)->shouldReturn(false);
    }

    function it_returns_true_with_string_larger_than_threshold()
    {
        $this->verify(self::LARGE_STRING)->shouldReturn(true);
    }
}
