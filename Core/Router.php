<?php
namespace Core;

class Router
{
    const ROUTER_MODULE = 1;
    
    const ROUTER_CONTROLLER = 2;
    
    const ROUTER_METHOD = 3;
    
    protected $preparedPath;
    
    public function __construct($path) 
    {
        $this->preparedPath = explode('/', $path);
        
        $class = (
                '\\'
                .$this->preparedPath[static::ROUTER_MODULE]
                .'\\'
                .$this->preparedPath[static::ROUTER_CONTROLLER]
                .'HTTPController'
            );
        
        $method = $this->preparedPath[static::ROUTER_METHOD];
                
        $object = new $class;
        $object->{$method}();
    }
    
}
