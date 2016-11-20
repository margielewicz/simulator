<?php
namespace User;

use Db\Db;

class UserModel
{
    const USER_ROLE_ACTIVE = 1;
    
    protected $table = 't_user';
    
    public function addUser($usLogin, $usEmail, $usPassword)
    {
        $res = (new Db)->setTable($this->table)
                    ->insertToDb([
                        'us_login' => $usLogin,
                        'us_email' => $usEmail,
                        'us_password' => $usPassword, 
                        'us_role' => self::USER_ROLE_ACTIVE
                    ]);
        
        return $res;
    }
    
}
