<?php
$username = $_POST["usernamePHP"];
$password = $_POST["passwordPHP"];
/*
    This is how we receive data from front end. 
    In fron end, we have two inputs named "usernamePHP" and "passwordPHP".
    The name of each input, is the key to receive data from there inputs in php.
    $varFromHTML = $_POST["name of html input"];
*/
if ($username == "user1" && $password == "epoka123") {
    exit("1");
} else {
    exit("0");
}
/*
    In reality, login systems rely on database authentications.
    For teaching purpose only, we are writing a simple condition.
    Only when username is 'user1' and password is 'epoka123', we 
    consider as the correct username and password.

    If response you receive from server is 0, it means that the username
    and password combination is wrong. If the response is 1, the login
    credetials are correct. This response will go to client side.

    Another important thing to remember: From client side, we can read
    the response of the server (the output of echo or exit functions). 
    But the client can't read or know the way we receive different outputs.
    (in our case, php if condition).
*/