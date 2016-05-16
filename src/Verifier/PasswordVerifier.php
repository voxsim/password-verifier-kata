<?php

namespace Verifier;

class PasswordVerifier implements Verifier
{
    private $verifier;

    public function __construct(Verifier $verifier)
    {
        $this->verifier = $verifier;
    }

    public function verify($string) {
        return $this->verifier->verify($string);
    }

    public static function create()
    {
      return new PasswordVerifier(
        new AndVerifier([
          new LengthLargerThenVerifier(8),
          new OneUpperCaseLetterVerifier()
        ])
      );
    }
}
