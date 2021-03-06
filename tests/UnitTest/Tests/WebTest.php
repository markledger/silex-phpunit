<?php

// require __DIR__ . '/../../../vendor/autoload.php';

use Silex\WebTestCase;

class WebTest extends WebTestCase {

	public function createApplication() {
		$app_env = 'test';
		return require __DIR__ . '/../../../web/index.php';
	}
	public function testUploadForm() {
		$client = $this->createClient();
		$crawler = $client->request('GET','/');
		
		$this->assertEquals(
			200, 
			$client->getResponse()->getStatusCode() 
			);

		$this->assertCount(
			1, 
			$crawler->filter('html:contains("Welcome")') 
			);
	}

}