<?php

namespace spec\Verifier;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Verifier\Verifier;

class AndVerifierSpec extends ObjectBehavior
{
    const A_STRING = 'a';

    function it_returns_true_if_has_not_verifiers()
    {
        $this->beConstructedWith([]);

        $this->verify(self::A_STRING)->shouldReturn(true);
    }

    function it_returns_true_if_the_verifier_returns_true(Verifier $verifier)
    {
        $this->beConstructedWith([$verifier]);

        $verifier->verify(self::A_STRING)->shouldBeCalled();
        $verifier->verify(self::A_STRING)->willReturn(true);

        $this->verify(self::A_STRING)->shouldReturn(true);
    }

    function it_returns_true_if_every_verifier_returns_true(Verifier $verifier1, Verifier $verifier2)
    {
        $this->beConstructedWith([$verifier1, $verifier2]);

        $verifier1->verify(self::A_STRING)->shouldBeCalled();
        $verifier1->verify(self::A_STRING)->willReturn(true);

        $verifier2->verify(self::A_STRING)->shouldBeCalled();
        $verifier2->verify(self::A_STRING)->willReturn(true);

        $this->verify(self::A_STRING)->shouldReturn(true);
    }
}
