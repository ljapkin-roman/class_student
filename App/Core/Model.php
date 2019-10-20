<?php
namespace App\Core;

class Model
{
            
    public $db;

    public function __construct()
    {
        $json = file_get_contents(__DIR__ . '/Environment.json');
        $json_data = json_decode($json, true);
        $env = $json_data['db'];

        try {
            $this->db = new \PDO("mysql:host={$env['host']};dbname={$env['dbname']};charset={$env['charset']}", "{$env['user']}", "{$env['password']}");
        } catch (PDOExpection $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }


}
