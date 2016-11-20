<?php

namespace Db;

class Db
{
    public $host = 'localhost';
    
    public $userName = 'root';
    
    public $password = '';
    
    public $dbName = 'simulator';
    
    public $db;
    
    public $table;

    public function __construct() 
    {
        $this->db = new \mysqli(
                $this->host,
                $this->userName,
                $this->password,
                $this->dbName
            );
        
        if ($this->db->connect_errno) {
            printf("Connect failed: %s\n", $this->db->connect_error);
            die();
        }
    }
    
    /**
     * @param array $params
     * @return bool
     */
    public function insertToDb($params)
    {
        $insertQuery = 'INSERT INTO ' . $this->table . ' ';
        
        $columns = '(';
        $values = '(';
        
        foreach ($params as $column => $value) {
            $columns .= (string)$column . ',';
            $values .= '\'' . (string)$value . '\',';
        }
        
        $parsedColumns = $this->removeComma($columns) . ')';
        $parsedValues = $this->removeComma($values) . ')';
        
        $insertQuery .= $parsedColumns . ' VALUES ' . $parsedValues;
        
        $result = $this->db->query($insertQuery);
        
        return $result;
    }
    
    /**
     * @param string $table
     * @return \Db\Db
     */
    public function setTable($table)
    {
        $this->table = $table;
        
        return $this;
    }
    
    /**
     * @param string $str
     * @return string
     */
    private function removeComma($str)
    {
        return rtrim($str, ',');
    }
    
}
