<?php

namespace Auth;

use Db\Db;

class AuthModel
{
    private $table = 't_user';
    
    public function addUser()
    {
        (new Db)->setTable($this->table)
                ->insertToDb([
                    'us_login' => 'zelu',
                    'us_email' => 'margielewicz@gmail.com',
                    'us_password' => 'ciezkieniekodowanehaslo', 
                    'us_role' => '1'
                ]);
    }
}
