<?php

use PHPUnit_Framework_TestCase;

class RepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialPage()
    {
         $statusCode = 400;
		    $pageContent = "if";

    $this->assertEquals(200, $statusCode);
    $this->assertContains('Contact us', $pageContent);
    $this->assertContains('<form', $pageContent);
    }
}