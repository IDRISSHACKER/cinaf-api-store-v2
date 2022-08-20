<?php

namespace Controller;

use Model\Software;

class SoftwareController{
    
    public function __construct(){
        
    }
    
    public function getSoftware(){
        $software = new Software();
        $software->getSoftware();
    }
    
}

