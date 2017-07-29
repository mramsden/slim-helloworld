<?php
namespace HelloWorld;

class App
{
	private $app;

	public function __construct()
	{
		$this->buildApp();
		$this->buildRoutes();
	}

	public function getApp()
	{
		return $this->app;
	}

	protected function buildApp()
	{
		$container = new \Slim\Container;

		$container['greeter'] = function () {
			return new Greeter;
		};

		$this->app = new \Slim\App($container);
	}

	protected function buildRoutes()
	{
		$app = $this->app;
		require dirname(__FILE__) . "/../routes.php";
	}
}