<?php

namespace Verifier;

class OneLowerCaseLetterVerifier implements Verifier
{
    public function verify($string)
    {
        return preg_match_all('/[a-z]/', $string) > 0;
    }
}
