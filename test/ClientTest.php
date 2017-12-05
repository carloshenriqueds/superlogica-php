<?php
namespace SuperLogica;
use SuperLogica\Client\Client;
use SuperLogica\Handler\Http;
use SuperLogica\Route\Route;
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
    public function queryTest()
    {
        $query = $this->client->query([]);
        $this->assertEquals('', $query);
        $query = $this->client->query(['query' => 'string']);
        $this->assertEquals("?query=string", $query);
    }
}