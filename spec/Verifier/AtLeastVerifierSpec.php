<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Verifier\Verifier;

class AtLeastVerifierSpec extends ObjectBehavior
{
    const A_STRING = 'a';

    function it_returns_true_if_has_not_verifiers_and_the_threshold_is_zero()
    {
        $this->beConstructedWith([], 0);

        $this->verify(self::A_STRING)->shouldReturn(true);
    }

    function it_returns_true_if_has_not_verifiers_and_the_threshold_is_one()
    {
        $this->beConstructedWith([], 1);

        $this->verify(self::A_STRING)->shouldReturn(false);
    }

    function it_returns_true_if_the_verifier_returns_true_and_limit_is_at_least_1(Verifier $verifier)
    {
        $this->beConstructedWith([$verifier], 1);

        $verifier->verify(self::A_STRING)->shouldBeCalled();
        $verifier->verify(self::A_STRING)->willReturn(true);

        $this->verify(self::A_STRING)->shouldReturn(true);
    }
}
