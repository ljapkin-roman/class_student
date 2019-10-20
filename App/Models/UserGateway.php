<?php
namespace App\Models;

use App\Core\Model as Model;

class UserGateway extends Model
{

    public function recordUser($data) 
    {
        $sql = 'INSERT INTO student (first_name, last_name, number_group, sex, email, score_ege, birthday, citizen) VALUES (:first_name, :last_name, :number_group, :sex, :email, :score_ege, :birthday, :citizen)';
       $toCheck = $this->db->prepare($sql, array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $toCheck->execute(
            array(':first_name' => $data['first_name'],
            ':last_name' => $data['last_name'],
            ':sex' => $data['sex'],
            ':number_group' => $data['number_group'],
            ':email' => $data['email'],
            ':score_ege' => $data['score'],
            ':birthday' => $data['birthday'],
            ':citizen' => $data['citizen']

        ));
    }

    public function getAllUser()
    {
        $sql = 'SELECT first_name, last_name, number_group, sex, email, score_ege, birthday, citizen FROM student';
        $allUser = $this->db->query($sql); 
        return $allUser;
    }
}
