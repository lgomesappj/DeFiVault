<?php
/**
 * Tests for DeFiVault
 */

use PHPUnit\Framework\TestCase;
use Defivault\Defivault;

class DefivaultTest extends TestCase {
    private Defivault $instance;

    protected function setUp(): void {
        $this->instance = new Defivault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defivault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
