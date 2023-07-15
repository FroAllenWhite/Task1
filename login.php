<?php

session_start();

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$_SESSION['email'] = htmlspecialchars($email);

$link = mysqli_connect("localhost", "root", "", "users");

if (!$link)
{
    die("Ошибка подключения: " . mysqli_connect_error());
}

$sql = "SELECT email, password FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0)
{
    header("Location: feedback.php");
    exit;
}
header("Location: index.php");