<?php

class Model {
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    function __construct($arr) {
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr){
        if($arr) {
            foreach($arr as $key => $values) {
                $this->$key = $values;                    
            }
        }
    }

    public function __get($key) {
        return $this->values[$key];
    }

    public function __set($key, $values) {
        $this->values[$key] = $values;
    }
}