## Task 1

Write a code that makes it possible to call methods implemented in different classes within an anonymous function.

A snippet which should work(turn on assertions and make sure the script exists with exist code of 1 as soon as an assertion fails):
```php
$strategy = function() {
    $this->logGreeting("hello world");
    return $this->getAnswer() === 42;
};
$evaluation = $runner->execute($strategy);

assert(true === $evaluation);
```
The two Methods logGreeting and getAnswer() are implemented in different classes.
Try to make clean abstractions (interfaces and/or abstract classes) if required, respect SOLID, the Law of Demeter, and DRY.
Develop iteratively, make TDD (with phpunit), and make nice, small commits in a git repository which you push to github.
You're not allowed to start from scratch if you make a mistake, either by deleting the repository and starting a new one, or by creating a branch for this purpose.
If you make a mistake, you must refactor the code, thus document the mistake made (and learn from it).
