<?php
namespace App\Controllers;

use App\Core\Controller as Controller;
use App\Models\UserGateway as UserGateway;

class Contr_index extends Controller
{
    function action_index()
    {
        $perPage = $_GET['perpage'];
        print_r($perPage);
        $db = new UserGateway();
        $data = $db->getAllUser();
        $this->view->generate('index.php', 'Someurl.php', $data);
    }
}
