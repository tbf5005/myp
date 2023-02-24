<?php

namespace App\Controllers\Auth;

class LoginController
{

    protected $username , $password ;


    public function index()
    {
        $this->username = $_REQUEST['username'];
        $this->password = $_REQUEST['password'];
    }

}