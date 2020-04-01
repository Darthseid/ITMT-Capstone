<?php

    session_start();
    $username = "";
    $password = "";
    $errors = array();

    //conncet to database
    $db = mysqli_connect('locahost', 'root', '', 'logintest');

    //complete user registration system using php
    //registration section
    //save to database
   

    //login
    if (isset($_POST['login'])) {
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);

        if (count ($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
                //log user in
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are logged in";
                header('location: blogList.html');
            }
            else {
                array_push($errors, "wrong suername/password combination");
                header('location: signup.html');
            }
        }
        //makes sure that the forms are field
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "password is required");
        }
    }