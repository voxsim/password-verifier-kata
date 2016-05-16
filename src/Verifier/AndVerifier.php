<?php

namespace Verifier;

class AndVerifier implements Verifier
{
    private $verifiers;

    public function __construct(array $verifiers)
    {
        $this->verifiers = $verifiers;
    }

    public function verify($string)
    {
        foreach ($this->verifiers as $verifier) {
            if (!$verifier->verify($string)) {
                return false;
            }
        }
        return true;
    }
}
