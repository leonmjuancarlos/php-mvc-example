<?php

namespace App\Core;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        require_once "../src/Views/$view.php";
    }

    public function model($model)
    {
        $modelClass = "App\\Models\\$model";
        return new $modelClass();
    }
}
