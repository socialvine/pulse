<?php

namespace Socialvine\Pulse;

class Pulse {

	private $adapter;

	function __construct(Socialvine\Pulse\AdapterInterface $adapter) {
		$this->adapter = $adapter;
	}

}