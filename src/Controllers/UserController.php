<?php

namespace App\Controllers;

use App\Core\Controller;

class UserController extends Controller
{
    public function list()
    {
        $user = $this->model('User');
        $data = ['users' => $user->getAll()];  // Empaquetamos los datos
        $this->view('users/list', $data);       // Pasamos los datos a la vista
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User');
            $name = $_POST['name'];
            $age = $_POST['age'];

            if ($user->save($name, $age)) {
                header('Location: ' . PROJECT_ROOT . '/users');
                exit();
            } else {
                echo "Error while saving user.";
            }
        } else {
            $this->view('users/create');
        }
    }

    public function delete()
    {
        $user = $this->model('User');
        $id = $_POST['id'];

        if ($user->delete($id)) {
            header('Location: ' . PROJECT_ROOT . '/users');
            exit();
        } else {
            echo "Error while deleting user.";
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];

            if ($user->update($id, $name, $age)) {
                header('Location: ' . PROJECT_ROOT . '/users');
                exit();
            } else {
                echo "Error while updating user.";
            }
        } else {
            $id = $_GET['id'];
            $user = $this->model('User');
            $data = ['user' => $user->getById($id)];
            $this->view('users/edit', $data);
        }
    }
}
