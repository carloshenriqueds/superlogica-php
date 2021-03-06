<?php
namespace SuperLogica\Handler;
class ResponselTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Response
     */
    private $response;
    
    protected function setUp()
    {
        $this->response = new Response();
        $this->response->setStatusCode(200);
        $this->response->setContentType("application/json");
        $this->response->setContent(array("mensagem" => "Ok"));
    }
    /**
     * @test
     */
    public function testStatusCodeIsNotNull()
    {
        $this->assertNotNull($this->response->getStatusCode());
    }
    /**
     * @test
     */
    public function testStatusCodeIsInteger()
    {
        $this->assertInternalType("int", $this->response->getStatusCode());
    }
    /**
     * @test
     */
    public function testStatusCodeIsEquals()
    {
        $this->assertEquals(200, $this->response->getStatusCode());
    }
    /**
     * @test
     */
    public function testContentIsNotNull()
    {
        $this->assertNotNull($this->response->getContent());
    }
    /**
     * @test
     */
    public function testContentIsArray()
    {
        $this->assertInternalType("array", $this->response->getContent());
    }
    /**
     * @test
     */
    public function testContentIsEquals()
    {
        $this->assertEquals(array("mensagem" => "Ok"), $this->response->getContent());
    }
}