<?php
namespace HelloWorld;

class Greeter
{
	public function greet(string $name = null): string
	{
		$name = ucfirst($name) ?: "World";
		return "Hello, $name!";
	}
}
