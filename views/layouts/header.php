<?php
    if (str_contains($_SERVER['SCRIPT_NAME'] , 'views/index.php')){
        require_once "../vendor/autoload.php" ;
    }else{
        require_once "../../vendor/autoload.php" ;
    }
    use App\Controllers\Auth ;
    $user = new Auth\Authorize();

    if (!$user->auth() && !str_contains($_SERVER['SCRIPT_NAME'] , 'views/auth/login.php')){
       return header('Location: http://localhost/myp/views/auth/login.php');
    }
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../assets/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="./../assets/css/style.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
