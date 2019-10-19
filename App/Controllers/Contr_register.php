<?php
namespace App\Controllers;

use App\Core\Controller as Controller;
use App\Validators\Validator_student as Validator_student;
use App\Models\Model_register as Model_register;

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
            $db = new Model_register();
            $db->recordUser($result['data']);
        }
    }


}
