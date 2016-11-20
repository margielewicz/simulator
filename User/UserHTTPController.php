<?php
namespace User;

use User\Usecase\AddUserUsecase;

class UserHTTPController
{
    public function addUser()
    {
        (new AddUserUsecase)->set([
            'userLogin' => 'login',
            'userEmail' => 'email',
            'userPassword' => 'password'
        ])->run();
    }
    
}