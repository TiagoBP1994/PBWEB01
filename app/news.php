<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of news
 *
 * @author Michal
 */
class news {
    
    public function __construct($news) {
        if($news){
            $this->set($news);
        }
    }
    
    public function set($news) {
        foreach($news as $key => $value) {   
            $value = $value->attributes();
            $this->{$key} = $value;
            return $this;
        }
    }
}
