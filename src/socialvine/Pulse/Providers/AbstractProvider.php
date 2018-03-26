<?php

namespace Socialvine\Pulse\Providers;

abstract class AbstractProvider implements ProviderInterface {
    
    /**
     *  Alias to likes function
     */

    public function following($id) {
        $this->likes($id);
    }
}