<?php

use Combodo\iTop\Test\UnitTest\ItopDataTestCase;

class AllowedPortalsTest extends ItopDataTestCase {


	/**
	 * @throws \Exception
	 * @dataProvider AllowedPortalsProvider
	 */
	public function testAllowedPortals(string $sAllowedPortals, string $sTestPortal, bool $bExpectedResult): void
	{
		$oCom = self::CreateCommunicationWithAllowedPortals($sAllowedPortals);
		$this->assertEquals($oCom->IsAllowedPortalsValid($sTestPortal), $bExpectedResult);
	}

	/**
	 * @throws \Exception
	 * @dataProvider AllowedPortalsFromContextTagProvider
	 */
	public function testAllowedPortalsFromContextTag(string $sAllowedPortals, string $sTestPortal, bool $bExpectedResult): void
	{
		// $oContextTag used to clean tag stack between each data test
		$oContextTag = new ContextTag('');
		
		// If we test a specific portal, iTop also definitely declared global portal context
		if(strpos($sTestPortal, 'Portal:') === 0){
			ContextTag::AddContext('GUI:Portal');
		}
		ContextTag::AddContext($sTestPortal);
		
		$oCom = self::CreateCommunicationWithAllowedPortals($sAllowedPortals);
		
		$this->assertEquals($oCom->IsAllowedPortalsValid(), $bExpectedResult);
		
		// And we destroy the context stack by calling previous $oContextTag destructor
		$oContextTag = new ContextTag('');
	}

	public function AllowedPortalsProvider(): array
	{
		return [
			'Portal single OK' => ['GUI:Portal', 'GUI:Portal', true],
			'Portal single NOK' => ['GUI:Portal', 'GUI:Console', false],
			'Console single OK' => ['GUI:Console', 'GUI:Console', true],
			'Console single NOK' => ['GUI:Portal', 'GUI:Console', false],
			'Console multi OK' => ['GUI:Portal,GUI:Console', 'GUI:Console', true],
			'Console multi NOK' => ['GUI:Portal,Login', 'GUI:Console', false],
			'Portal base single OK' => ['Portal:itop-portal', 'Portal:itop-portal', true],
			'Portal base single NOK' => ['GUI:Portal', 'Portal:itop-portal', false],
		];
	}

	public function AllowedPortalsFromContextTagProvider(): array
	{
		return [
			'Portal single OK' => ['GUI:Portal', 'GUI:Portal', true],
			'Portal single NOK' => ['GUI:Portal', 'GUI:Console', false],
			'Console single OK' => ['GUI:Console', 'GUI:Console', true],
			'Console single NOK' => ['GUI:Portal', 'GUI:Console', false],
			'Console multi OK' => ['GUI:Portal,GUI:Console', 'GUI:Console', true],
			'Console multi NOK' => ['GUI:Portal,Login', 'GUI:Console', false],
			'Portal base single OK' => ['Portal:itop-portal', 'Portal:itop-portal', true],
			'Portal base single NOK' => ['Login', 'Portal:itop-portal', false],
			'Portal base from global single OK' => ['GUI:Portal', 'Portal:itop-portal', true],
			'Portal base multi OK' => ['Portal:itop-portal,GUI:Portal,GUI:Console', 'Portal:itop-portal', true],
			'Portal base from global multi OK' => ['GUI:Portal,GUI:Console', 'Portal:itop-portal', true],
		];
	}
	
	public static function CreateCommunicationWithAllowedPortals($sAllowedPortals){
		$oComm = new Communication();
		$oComm->Set('allowed_portals', $sAllowedPortals);
		return $oComm;
	}
}