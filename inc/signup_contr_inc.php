<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $pwdrepeat, string $email) {
    if(empty($username)||empty($pwd)||empty($pwdrepeat)||empty($email)) {
        return true;
    }else {
        return false;
    }
}

function is_email_valid(string $email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}

function is_email_valid(string $email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}