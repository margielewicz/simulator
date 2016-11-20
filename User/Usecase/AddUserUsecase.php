<?php
namespace User\Usecase;

use Core\Usecase\Usecase;
use User\UserManager;

class AddUserUsecase extends Usecase
{
    protected $UserManager;
    
    public $userLogin;
    
    public $userEmail;
    
    public $userPassword;

    public function __construct() 
    {
        $this->UserManager = new UserManager;
    }
    
    public function run()
    {
        $UserManager = $this->UserManager->addUser(
                $this->userLogin, 
                $this->userEmail, 
                $this->userPassword
            );
        
        return $UserManager;
    }
    
}
