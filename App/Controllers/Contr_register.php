<?php
namespace App\Controllers;

use App\Core\Controller as Controller;
use App\Validators\Validator_student as Validator_student;
use App\Models\UserGateway as UserGateway;

class Contr_register extends Controller
{
    function action_index($data = null)
    {
        $this->view->generate('register.php', 'Someurl.php', $data);
    }    

    function action_create()
    {
        $validator = new Validator_student();
        $result = $validator->validate($_POST);
        if (!empty($result['errors'])) {
            $this->action_index($result);
        } else {
            $db = new UserGateway();
            $db->recordUser($result['data']);
            session_start();
            setcookie('user_email', $result['data']['email'], time()+60*60*24*30, '/');
        }
    }


}
