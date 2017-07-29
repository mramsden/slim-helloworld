<?php
namespace HelloWorld\Tests\Unit;

use HelloWorld\Greeter;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass HelloWorld\Greeter
 */
final class GreeterTest extends TestCase
{
	/**
	 * @covers ::greet
	 */
	public function test_shouldGreetWithHelloWorld_whenNoNameSupplied(): void
	{
		$greeter = new Greeter;

		$greeting = $greeter->greet();

		$this->assertEquals("Hello, World!", $greeting);
	}

	/**
	 * @covers ::greet
	 */
	public function test_shouldGreetWithHelloName_whenNameSupplied(): void
	{
		$greeter = new Greeter;

		$greeting = $greeter->greet("Test");

		$this->assertEquals("Hello, Test!", $greeting);
	}

	/**
	 * @covers ::greet
	 */
	public function test_shouldGreetWithUppercaseName_whenLowercaseNameSupplied(): void
	{
		$greeter = new Greeter;

		$greeting = $greeter->greet("test");

		$this->assertEquals("Hello, Test!", $greeting);
	}
}
