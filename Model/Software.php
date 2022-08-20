<?php
namespace Model;

use Model\BaseModel;

interface BaseModelInterface
{
    const TABLE = "software";

}

class Software extends BaseModel implements BaseModelInterface {

    public function __construct(){
        
    }

    public function getSoftwares()
    {
        return $this->bdd()->getAll(self::TABLE);
    }

    public function getSoftwareById($id){

    }

    public function addSoftware($software){

    }

    public function updateSoftware($software){

    }

    public function deleteSoftware($id){

    }

}

