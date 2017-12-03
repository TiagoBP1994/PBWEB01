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
    
    public function __construct($json = false) {
        if ($json) {$this->set(json_decode($json, true));}
    }

    public function set($data) {
        foreach ($data as $dat){ 
            
            foreach ($dat AS $key => $value) {
                if (is_array($value)) {
                    $sub = new job();
                    $sub->set($value);
                    $value = $sub;
                }
                $this->{$key} = $value;
            }
        }    
    }
    
    /*function _construct($data){
        foreach ($data as $dat){
            $this->Id = $dat->Id;
            $this->Description = isset($dat['Description']) ? $dat['Description'] : NULL;
            $this->HeadLine = isset($dat['HeadLine']) ? $dat['HeadLine'] : NULL;
            $this->Location = isset($dat['Location']) ? $dat['Location'] : NULL;
            $this->JobBeginDate = isset($dat['JobBeginDate']) ? $dat['JobBeginDate'] : NULL;
            $this->Applicationdeadline = isset($dat['Applicationdeadline']) ? $dat['Applicationdeadline'] : NULL;
            $this->Duration = isset($dat['Duration']) ? $dat['Duration'] : NULL;
            $this->Country = isset($dat['Country']) ? $dat['Country'] : NULL;
            $this->ExternalAdIsPublished = isset($dat['ExternalAdIsPublished']) ? $dat['ExternalAdIsPublished'] : NULL;
            $this->AdvertisingType = isset($dat['AdvertisingType']) ? $dat['AdvertisingType'] : NULL;
            $this->SerchEmail = isset($dat['SerchEmail']) ? $dat['SerchEmail'] : NULL;
            $this->Footer = isset($dat['Footer']) ? $dat['Footer'] : NULL;
        }
        return $this;
    }*/
    
    static function displayJobs(){
        $json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');
        $data = json_decode($json,true);

        print_r ($data);
    }
    
    function getData() {
        return $this->data;
    }

    static function setData($data) {
        $this->data = $data;
    }


}
