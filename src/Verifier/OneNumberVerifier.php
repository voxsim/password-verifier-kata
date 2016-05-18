<?php

namespace Verifier;

class OneNumberVerifier implements Verifier
{
    public function verify($string)
    {
        return preg_match_all('/[0-9]/', $string) > 0;
    }
}
