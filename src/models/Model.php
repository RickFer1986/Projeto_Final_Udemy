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
                $this->set($key, $values);                    
            }
        }
    }

    public function get($key) {
        return $this->values[$key];
    }

    public function set($key, $values) {
        $this->values[$key] = $values;
    }
}