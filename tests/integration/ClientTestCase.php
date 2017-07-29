<?php
namespace HelloWorld\Tests\Integration;

use HelloWorld\App;
use PHPUnit\Framework\TestCase;
use Slim\Http\Environment;
use Slim\Http\Request;

class ClientTestCase extends TestCase
{
    private $app;
    protected $response;

    public function setUp()
    {
        $this->app = (new App)->getApp();
    }

    public function get($uri): ClientTestCase
    {
        $environment = Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => $uri
        ]);
        $request = Request::createFromEnvironment($environment);
        $this->app->getContainer()['request'] = $request;
        $this->response = $this->app->run(true);

        return $this;
    }

    public function assertResponseCode($code): ClientTestCase
    {
        $this->assertEquals($code, $this->response->getStatusCode());

        return $this;
    }

    public function assertResponseBodyContains($text): ClientTestCase
    {
        $this->assertContains($text, (string) $this->response->getBody());

        return $this;
    }
}
