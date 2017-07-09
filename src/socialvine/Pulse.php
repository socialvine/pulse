<?php

namespace Socialvine;

class Pulse {

	private $config = [];

	private function getProviderClass($methodName) {
		return "\\Socialvine\\Pulse\\Providers\\".ucfirst($methodName)."Provider";
	}

	public function __call($methodName, $args) {
		$className = $this->getProviderClass($methodName);
		if(\class_exists($className)) {
			if(!\array_key_exists($methodName, $this->config)) {
				throw new \Exception("Configuration for Provider ".ucfirst($methodName)." not Found.");
			}
			return new $className($this->config[$methodName]);
		} else {
			throw new \Exception("Provider ".ucfirst($methodName)." not Found.");
		}
		
    }

	public function addConfig($config) {
		array_push($this->config, $config);
	}

	public function setConfig($config) {
		$this->config = $config;
	}
	
}