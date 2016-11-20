<?php
namespace Core\Manager;

class Manager
{
    public function end($result = true, $data = null)
    {
        if ($data === null || !is_array($data)) {
            return $result;
        }
        
        $error = ['error' => !((bool)$result)];
         
        return array_merge($error, $data);
    }
    
}
