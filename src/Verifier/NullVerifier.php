<?php

namespace Verifier;

class NullVerifier implements Verifier
{
    public function verify($string)
    {
        return $string != null;
    }
}
