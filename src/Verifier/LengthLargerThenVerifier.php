<?php

namespace Verifier;

class LengthLargerThenVerifier implements Verifier
{
    private $threshold;

    public function __construct($threshold)
    {
        $this->threshold = $threshold;
    }

    public function verify($string)
    {
        return strlen($string) > $this->threshold;
    }
}
