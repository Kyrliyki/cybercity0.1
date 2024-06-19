<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: MainPage.php");
    exit;
}

require_once "config.php";

$message = '';
$message_type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($stmt = $DataBase->prepare('SELECT id, password, status, algebra, russian_language, Biology, Chemistry, History FROM users WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows != 0) {
            $stmt->bind_result($id, $password, $status, $algebra, $russian_language, $Biology, $Chemistry, $History);
            $stmt->fetch();
            if (password_verify($_POST['password'], $password)) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['status'] = $status;
                $_SESSION['algebra'] = $algebra;
                $_SESSION['russian_language'] = $russian_language;
                $_SESSION['Biology'] = $Biology;
                $_SESSION['Chemistry'] = $Chemistry;
                $_SESSION['History'] = $History;
                header("location: MainPage.php");
            } else {
                $message = 'Invalid password';
                $message_type = 'error';
            }
        } else {
            $message = 'User does not exist';
            $message_type = 'error';
        }
        $stmt->close();
    }
}

include('../templates/login.php');
?>
