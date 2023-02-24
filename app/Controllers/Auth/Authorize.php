<?php namespace App\Controllers\Auth ;

use App\Models\DB;
use mysql_xdevapi\TableSelect;

class Authorize
{
    public function auth(){

        $user = new DB('myp' , 'root' , '' , 'localhost');
        $name = ':mahdi' ;
        var_dump($user->run("") , ":name = $name");

    }
}