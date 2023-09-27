<?php
function generatePassword($length)
{
    $allCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";

    $characterLength = strlen($allCharacters);
    $password = '';

    for ($i = 0; $i < $length; $i++) :
        $password .= $allCharacters[rand(0, $characterLength - 1)];
    endfor;

    return $password;
}

echo "New Generated Password: " . generatePassword(12);
