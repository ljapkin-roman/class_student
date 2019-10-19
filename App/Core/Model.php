<?php
namespace App\Core;

class Model
{
            
    public $db;

    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host=localhost;dbname=class_student;charset=utf8', 'roma', 'longPassword');
        } catch (PDOExpection $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }


}
