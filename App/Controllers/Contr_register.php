<?php
namespace App\Controllers;

use App\Core\Controller as Controller;

class Contr_register extends Controller
{
    function action_index()
    {
        $this->view->generate('register.php', 'Someurl.php');
    }    
}
