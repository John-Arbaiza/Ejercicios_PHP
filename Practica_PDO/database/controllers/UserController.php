<?php

class UserController
{
    public function index()
    {
        require_once "models/User.php";
        $user = new User();
        $users = $user->index();
        require_once "views/users.php";
    }
    //----------------------------------------
    public function new()
    {
        require_once "views/newUser.php";
    }
   //----------------------------------------
    public function store()
    {
        require_once "models/User.php";
        $user = new User();
        $user->store($_POST);
    }
}