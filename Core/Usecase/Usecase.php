<?php
namespace Core\Usecase;

class Usecase
{
    public function set($params)
    {
        $classFields = get_object_vars($this);
        
        foreach ($params as $key => $value) {
            if(array_key_exists($key, $classFields)) {
                $this->$key = $value;
            } else {
                throw new \Exception('Undefined key ' . $key . ' in ' . get_class($this));
            }
        }
        
        return $this;
    }
    
}
