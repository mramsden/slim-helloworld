<?php
namespace HelloWorld\Tests\Integration;

final class HelloTest extends ClientTestCase
{
	public function test_shouldReturnGreeting_whenHelloResourceRequested()
	{
        $this->get('/hello')
            ->assertResponseCode(200)
            ->assertResponseBodyContains("Hello, World!");
	}

	public function test_shouldReturnGreeting_whenOptionalNameSuppliedToHello()
	{
        $this->get('/hello/test')
            ->assertResponseCode(200)
            ->assertResponseBodyContains("Hello, Test!");
	}
}
