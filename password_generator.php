<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    $charCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, $charCount - 1)];
        $password .= $randomChar;
    }

    return $password;
}

$passwordLength = 12;
$generatedPassword = generatePassword($passwordLength);

echo 'Generated Password: ' . $generatedPassword;
?>
