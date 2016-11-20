<?php
namespace User;

use Core\Manager\Manager;

class UserManager extends Manager
{
    protected $UserModel;
    
    public function __construct() 
    {
        $this->UserModel = new UserModel;
    }
    
    public function addUser($usLogin, $usEmail, $usPassword)
    {
        $res = $this->UserModel->addUser($usLogin, $usEmail, $usPassword);
        
        return $this->end($res);
    }
    
}
