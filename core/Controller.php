<?php

namespace Core;

abstract class Controller
{
    protected function view($view, $data = [])
    {
        return View::render($view, $data);
    }
    
    // Can add model loading here if needed
}
