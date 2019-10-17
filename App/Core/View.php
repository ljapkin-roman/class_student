<?php 
namespace App\Core;

class View
{
    function generate($content_view, $template_view, $data = null)
    {
        include __DIR__ .'../../../Public/template.php';
    } 
}
