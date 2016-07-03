# Password Verifier

This is my solution for [TDD Kata 3](http://osherove.com/tdd-kata-3-refactoring/) of Roy Osherove

# Problem

Create a Password verifications class called “PasswordVerifier”.

1. Add the following verifications to a master function called “verify()”

  - password should be larger than 8 chars
  - password should not be null
  - password should have one uppercase letter at least
  - password should have one lowercase letter at least
  - password should have one number at least

  Each one of these should return true if the validation is ok.

2. Add feature: Password is OK if at least three of the previous conditions is true

3. Add feature: password is never OK if item 1.4 is not true.

# Instructions
```
composer install
./bin/phpspec run
```
