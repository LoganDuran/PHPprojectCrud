<?php

// Signup controller tasked with managing the user input

declare(strict_types=1);


// Error handler functions

function is_input_empty(string $username, string $pwd, string $pwdrepeat, string $email) {
    if(empty($username) || empty($pwd) || empty($pwdrepeat) || empty($email)) {
        return true;
    }else {
        return false;
    }
}

function is_email_invalid(string $email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username) {
    if(get_username($pdo, $username)) {
        return true;
    }else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {
    if(get_email($pdo, $email)) {
        return true;
    }else {
        return false;
    }
}
    
function is_pwdrepeat_same(string $pwd, string $pwdrepeat) {
    if($pwd != $pwdrepeat) {
        return true;
    }else {
        return false;
    }
}


function create_user(object $pdo, string $username, string $pwd, string $email, string $favtank) {
   
    set_user($pdo, $username, $pwd, $email, $favtank);
}
