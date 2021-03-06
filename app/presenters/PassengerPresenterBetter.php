<?php

declare(strict_types = 1);

namespace App\Presenters;

use App\Model\Document\DocumentFactory;
use App\Model\Passenger\GoodPassenger;

class PassengerPresenterBetter
{

	public function renderDummies(): void
	{
		$foreignGoodPassanger = new GoodPassenger(
			'Ivan Drago',
			DocumentFactory::getPassport()
		);
		$nativeGoodPassanger = new GoodPassenger(
			'Martin Chytrý',
			DocumentFactory::getIdCard()
		);
	}

}
