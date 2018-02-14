<?php

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}



if(isset($_POST['registerButton'])) {

    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['username']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormString($_POST['password2']);

    $successful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if($successful) {
        header("Location: index.php");
    }
};
 ?>
