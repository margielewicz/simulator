<?php

namespace Auth;

use Auth\AuthModel;

class Auth
{
    private $AuthModel;
    
    public function __construct() {
        $this->AuthModel = new AuthModel;
    }

    public function isAdmin() 
    {
        
    }
    
}
