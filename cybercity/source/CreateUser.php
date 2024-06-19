<?php
require_once "config.php";

$message = '';
$message_type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $username = mysqli_real_escape_string($DataBase, trim($_POST["username"]));
    $password = mysqli_real_escape_string($DataBase, password_hash(trim($_POST["password"]), PASSWORD_DEFAULT));
    $status = mysqli_real_escape_string($DataBase, trim($_POST["status"]));
    $surname = mysqli_real_escape_string($DataBase, trim($_POST["surname"]));
    $firstname = mysqli_real_escape_string($DataBase, trim($_POST["firstname"]));
    $patronymic = mysqli_real_escape_string($DataBase, trim($_POST["patronymic"]));
    $dob = mysqli_real_escape_string($DataBase, trim($_POST["dob"]));
    $algebra = mysqli_real_escape_string($DataBase, trim($_POST["algebra"]));
    $russian_language = mysqli_real_escape_string($DataBase, trim($_POST["russian_language"]));
    $Biology = mysqli_real_escape_string($DataBase, trim($_POST["Biology"]));
    $Chemistry = mysqli_real_escape_string($DataBase, trim($_POST["Chemistry"]));
    $History = mysqli_real_escape_string($DataBase, trim($_POST["History"]));
    if($algebra==""){$algebra=0;}
    if($russian_language==""){$russian_language=0;}
    if($Biology==""){$Biology=0;}
    if($Chemistry==""){$Chemistry=0;}
    if($History==""){$History=0;}

    $sql = "INSERT INTO Users (username, password, status, surname, firstname, patronymic, dob, algebra, russian_language, Biology, Chemistry, History) 
    VALUES ('$username', '$password', '$status', '$surname', '$firstname', '$patronymic', '$dob', '$algebra', '$russian_language', '$Biology', '$Chemistry', '$History')";
    if (mysqli_query($DataBase, $sql)) {
        $message = 'Data successfully added';
        $message_type = 'success';
    } else {
        $message = 'Error: ' . mysqli_error($DataBase);
        $message_type = 'error';
    }
    mysqli_close($DataBase);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>CyberSity</h1>
			<div class="switch-wrapper">
                <p class="switch-label">day/night</p>
                <label class="switch">
                    <input type="checkbox" id="themeToggle">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="right">
            <div class="content">
                <h2>Create a user</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Login" required>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <h2>Personal info</h2>
                    <input type="text" name="surname" placeholder="Last name" required>
                    <input type="text" name="firstname" placeholder="First name" required>
                    <input type="text" name="patronymic" placeholder="Patronymic" required>
                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" required>


                    <select id="userType" name="status" required>
                        <option value="">Выберите тип пользователя...</option>
                        <option value="student">Студент</option>
                        <option value="teacher">Учитель</option>
                    </select>

                    <div id="subjectFields" class="grid-container">
                        <h2>Выберите предметы:</h2>
                        <label><input type="checkbox" name="algebra" value="1">Алгебра</label>
                        <label><input type="checkbox" name="russian_language" value="1">Химия</label>
                        <label><input type="checkbox" name="Biology" value="1">Биология</label>
                        <label><input type="checkbox" name="Chemistry" value="1">Русский язык</label>
                        <label><input type="checkbox" name="History" value="1"> История</label>
                    </div>


                    <input type="submit" value="Create user">
                </form>
                <a href="../source/MainPage.php">Go back</a>
            </div>
        </div>
    </div>

    <?php if ($message): ?>
        <div class="notification <?php echo $message_type; ?>" id="notification"><?php echo $message; ?></div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var notification = document.getElementById("notification");
                notification.style.bottom = "20px";
                setTimeout(function() {
                    notification.style.bottom = "-50px";
                }, 5000);
            });
        </script>
    <?php endif; ?>
	<script src="main.js"></script>
</body>
</html>