<?php

namespace Verifier;

class LengthLargerThen implements Verifier
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
