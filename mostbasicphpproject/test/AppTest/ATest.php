<?php
declare(strict_types=1);

namespace AppTest;

use App\A;
use PHPUnit\Framework\TestCase;

class ATest extends TestCase {

    /**
     * @test
     */
    public function fun(): void
    {
        $o = new A();
        $this->assertEquals(true, $o->fun());
    }
}
