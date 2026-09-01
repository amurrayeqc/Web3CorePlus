<?php
/**
 * Tests for Web3CorePlus
 */

use PHPUnit\Framework\TestCase;
use Web3coreplus\Web3coreplus;

class Web3coreplusTest extends TestCase {
    private Web3coreplus $instance;

    protected function setUp(): void {
        $this->instance = new Web3coreplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3coreplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
