<?php

namespace Verifier;

class OneUpperCaseLetterVerifier implements Verifier
{
    public function verify($string)
    {
        return preg_match_all('/[A-Z]/', $string) > 0;
    }
}
