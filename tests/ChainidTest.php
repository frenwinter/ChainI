<?php
/**
 * Tests for ChainID
 */

use PHPUnit\Framework\TestCase;
use Chainid\Chainid;

class ChainidTest extends TestCase {
    private Chainid $instance;

    protected function setUp(): void {
        $this->instance = new Chainid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
