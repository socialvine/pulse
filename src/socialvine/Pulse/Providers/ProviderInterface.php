<?php

namespace Socialvine\Pulse\Providers;

interface ProviderInterface {

    public function followers($id);
    
    public function likes($id);

    public function timeline($params);
    
    public function search($params);

}