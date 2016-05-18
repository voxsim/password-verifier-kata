<?php

namespace Verifier;

class AtLeastVerifier implements Verifier
{
    private $verifiers;
    private $threshold;

    public function __construct(array $verifiers, $threshold)
    {
        $this->verifiers = $verifiers;
        $this->threshold = $threshold;
    }

    public function verify($string)
    {
        $verifiedVerifiers = array_filter(
            $this->verifiers,
            function($verifier) use ($string) {
                return $verifier->verify($string);
            }
        );

        return count($verifiedVerifiers) >= $this->threshold;
    }

    private function isVerified($verifier)
    {
        return $verifier->verify($string);
    }
}
