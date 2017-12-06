<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of job
 *
 * @author Michal
 */
class job {
    
    public function __construct($data = false) {
        if ($data) {
            $this->set($data);
        }
    }

    public function set($data) {
        foreach ($data AS $key => $value) {
            if (is_array($value)) {
                $sub = new job();
                $sub->set($value);
                $value = $sub;
            }
            $this->{$key} = $value;
        } 
        return $this;
    }
    
    static function displayJobs(){
        /*$json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');
        $data = json_decode($json,true);

        print_r ($data);*/
    }
    
    function getData() {
        return $this->data;
    }

    static function setData($data) {
        $this->data = $data;
    }


}
