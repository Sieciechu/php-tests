<?php
//
// To run: `$ ./dockerphp a.php`
//


class B {}

class A {
    public int $p1;
    public ?int $p2;
    public B $p3;
    public ?B $p4;
    public function __construct() {
        echo "construct A called\n";
    }
}

$o = new A(); // => construct A called

var_dump($o);
/* =>

object(A)#1 (0) {
  ["p1"]=>
  uninitialized(int)
  ["p2"]=>
  uninitialized(?int)
  ["p3"]=>
  uninitialized(B)
  ["p4"]=>
  uninitialized(?B)
}

*/

