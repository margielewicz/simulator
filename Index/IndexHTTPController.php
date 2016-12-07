<?php
namespace Index;

use Index\Quad\Skeleton\Skeleton;

class IndexHTTPController
{
    public function index()
    {
        $Skeleton = (new Skeleton())->addQuad('Skeleton');
    }
    
}
