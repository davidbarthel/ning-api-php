<?php


use Ning\NingApiHelper\NingApi;

class TokenTest extends PHPUnit_Framework_TestCase
{

    protected $ningApi;

    protected function setUp()
    {
        $subdomain = TestConfig::SUBDOMAIN;

        $consumer_key = TestConfig::CONSUMER_KEY;
        $consumer_secret = TestConfig::CONSUMER_SECRET;

        $ningApi = new NingApi($subdomain, $consumer_key, $consumer_secret);

        $this->ningApi = $ningApi;
    }

    public function testLogin()
    {
        $result = $this->ningApi->login(TestConfig::EMAIL,
            TestConfig::PASSWORD);
        $this->assertTrue($result['success']);
    }

    protected function tearDown()
    {
        $this->ningApi = null;
    }
}