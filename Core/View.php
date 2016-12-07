<?php
namespace Core;

class View 
{
    private $data = [];

    public function set($key, $value = null) 
    {
        if (is_array($key)) {
            foreach ($key as $varName => $varKey) {
                if (is_string($varName)) {
                    $this->data[$varName] = $varKey;
                } else {
                    $varName = (string) $varName;
                    $this->data['key' . $varName] = $varKey;
                }
            }
        } else {
            $this->data[$key] = $value;
        }
        return $this;
    }

    public function addQuad($tplName) 
    {
        $tplFile = __DIR__.'\\..\Index\Quad\Skeleton\\'.$tplName . '.php';
        
        if (is_file($tplFile)) {
            extract($this->data);
            ob_start();
            include $tplFile;
            return ob_get_clean();
        } else {
            die('Nie działa templatka!');
        }
    }

}
