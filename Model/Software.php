<?php
namespace Model;

use Model\BaseModel;

interface BaseModelInterface
{
    const TABLE = "software";

}

class Software extends BaseModel implements BaseModelInterface 
{

    public function __construct(){
        
    }

    public function getSoftwares()
    {
        return $this->bdd()->getAll(self::TABLE);
    }

    public function getSoftwareById($id){

    }

    public function setSoftware($software){

        self::bdd()->save("INSERT INTO software (title, description, fkSupport) VALUES (:title, :description, :fkSupport)", $software);
    }

    public function updateSoftware($software){
        self::bdd()->update("UPDATE software SET title = :title, description = :description, fkSupport = :fkSupport WHERE id = :id", $software);
    }

    public function deleteSoftware($id){

    }

}

