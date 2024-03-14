<?php

class DB {
    private $_config = [];
    private $_connection;
    private $_lastInsertId;

    /* 
    *
    *
    */
    public function connect(){
        $this->_connection = new PDO(
            $this->_config['host'], 
            $this->_config['username'], 
            $this->_config['password'],
            $this->_config['name']
        );
    }

    /*
    * It executes the given query and returns the result
    * @param String $query
    * @param Array $data
    * @returns Array|Object dataset result
    *
    */
    public function query($query, $data){}

    /* 
    *
    *
    */
    public function getLastInsertID(){
        return $this->_lastInsertID;
    }
}

?>