<?php

function generate_password($password_length) {
    
    $password = '';

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+[]{};:,.<>?/';

    for ($i = 0; $i < $password_length; $i++) {
        // estraggo dalla stringa $chars un solo carattere e con un indice random, poi lo concateno alla stringa $password per ogni iterazione del ciclo
        $password .= substr($chars, rand(0, strlen($chars)), 1);
    }

    return $password;
}

if (isset($_GET['password_length']) && $_GET['password_length'] >= 6 && $_GET['password_length'] !=='') {

    $password_length = $_GET['password_length'];

    $password = generate_password($_GET ['password_length']);
}

?>