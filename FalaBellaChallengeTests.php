<?php
require 'FalaBellaChallenge.php';


use PHPUnit\Framework\TestCase;


class FalaBellaChallengeTests extends TestCase
{
	private $fala_bella_challenge;


	protected function setUp()
	{
		$this->fala_bella_challenge = new FalaBellaChallenge();
	}


	protected function tearDown()
	{
		$this->fala_bella_challenge = NULL;
	}


	public function testPrintingNumber()
	{
		$result = $this->fala_bella_challenge->letsPrintThisNumber(30);
		$this->assertEquals('Linianos', $result);
	}

	public function testPrintingRangeOfNumbers()
	{
		$result = $this->fala_bella_challenge->printRangeOfNumbers(1, 15, false);
		$this->assertEquals([1,2,'Linio',4,'IT','Linio',7,8,'Linio','IT',11,'Linio',13,14,'Linianos'], $result);
	}


}
