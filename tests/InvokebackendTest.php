<?php
/**
 * Tests for InvokeBackend
 */

use PHPUnit\Framework\TestCase;
use Invokebackend\Invokebackend;

class InvokebackendTest extends TestCase {
    private Invokebackend $instance;

    protected function setUp(): void {
        $this->instance = new Invokebackend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Invokebackend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
