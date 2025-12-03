<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Parrot.php';

class ParrotTest extends TestCase
{
    public function testEuropeanParrotSpeed()
    {
        $parrot = new Parrot(Parrot::EUROPEAN, 0, 0.0, false);
        $this->assertEquals(12.0, $parrot->getSpeed());
    }

    public function testAfricanParrotSpeed()
    {
        $parrot = new Parrot(Parrot::AFRICAN, 2, 0.0, false);
        $this->assertEquals(max(0, 12.0 - 9.0 * 2), $parrot->getSpeed());
    }

    public function testNorwegianBlueNotNailed()
    {
        $parrot = new Parrot(Parrot::NORWEGIAN_BLUE, 0, 2.0, false);
        $this->assertEquals(12.0 + 2.0 * 1.5, $parrot->getSpeed());
    }

    public function testNorwegianBlueNailed()
    {
        $parrot = new Parrot(Parrot::NORWEGIAN_BLUE, 0, 2.0, true);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }
}
