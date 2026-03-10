<?php

namespace Core;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        
        $viewFile = "../views/" . $view . ".php";
        
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            die("View $view not found.");
        }
    }
}
