<?php

$title = htmlspecialchars($_POST['title']);
$text = htmlspecialchars($_POST['text']);
$problem = htmlspecialchars($_POST['problem']);
$problems = $_POST['problems'];
$select = htmlspecialchars($_POST['select']);

var_dump($title, $text, $problem, $problems, $select);
$problemsRes = "";

foreach ($problems as $item) {
    $problemsRes .= htmlspecialchars("$item ");
}
echo $problemsRes;

$link = mysqli_connect("localhost", "root", "", "users");
if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

$id = mysqli_query($link, "SELECT max(id) FROM feedback");
$id = intval(mysqli_fetch_array($id)[0]);
$id++;

$sql = "INSERT INTO feedback (id, title, text, problem, problems, `select`) " .
    "VALUES ('$id', '$title', '$text', '$problem', '$problemsRes', '$select')";
$result = mysqli_query($link, $sql);
if (!$result) {
    die("Ошибка запроса: " . mysqli_error($link));
}

header("Location: feedback.php");
