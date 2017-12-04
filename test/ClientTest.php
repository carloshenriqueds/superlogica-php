<?php
namespace SuperLogica;
use SuperLogica\handler\Http;
use SuperLogica\client\Client;
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    private $client;
    protected function setUp()
    {
        $this->client = new Client('my-access-token', 'my-app-token');
    }
    /**
     * @test
     */
    public function constructShouldConfigureTheAttributes()
    {
        $this->assertAttributeSame('my-access-token', 'accessToken', $this->client);
        $this->assertAttributeSame('my-app-token', 'appToken', $this->client);
    }
    
    /**
     * @test
     */
    public function methodBuildRequestShouldInicializeTheCurlResource()
    {
        $route = new Route();
        $resource = $this->client->buildRequest($route, Http::GET);
        $this->assertEquals('object', gettype($resource));
    }
    /**
     * @test
     */
    public function queryTest()
    {
        $query = $this->client->query([]);
        $this->assertEquals('', $query);
        $query = $this->client->query(['query' => 'string']);
        $this->assertEquals("?query=string", $query);
    }
}