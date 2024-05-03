<?php
    session_start();
    if(isset($_SESSION['userId'])){
        header('Location: index.php');
    }

    include __DIR__ ."/../Models/user.php";

    if(!empty( $_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $authenticated = array_filter($users, function ($user) use ($email, $password){
            return $user['email'] == $email && $user['password'] == $password;
        });
        var_dump($authenticated);
        if(count($authenticated) > 0){
            $user = array_shift($authenticated);
            $_SESSION['userId'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            header('Location: index.php');
        } else {
            header('Location: login.php?error=1');
        }
    }