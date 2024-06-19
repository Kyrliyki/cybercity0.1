<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: authenticate.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<?php
		if ($_SESSION['status'] === 'admin') {
			?>
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
                    <a class="offcanvas"><span></span><span></span><span></span></a>
					<div class="content" style="max-width: 600px;">
						<h1>Hello <b><?php echo $_SESSION["username"]; ?></b></h1>
						<div style="display: flex; align-items: center; justify-content: space-between;">
							<h2>Create a user to log in</h2>
							<a href="CreateUser.php">Create</a>
						</div>
						<div style="display: flex; align-items: center; justify-content: space-between;">
							<h2>View student information</h2>
							<a href="AdminInfo.php">View</a>
						</div>
						<div class="logout"><a href="logout.php">Log out</a></div>
					</div>
				</div>
			</div>
			<?	
		}
	?>
	<?php
			if ($_SESSION['status'] === 'student') {
			?>
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
            <a class="offcanvas"><span></span><span></span><span></span></a>
            <div class="content" style="max-width: 600px;">
                <h1>Привет <b><?php echo $_SESSION["username"]; ?></b></h1>
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h2>Алгебра</h2>
                    <a href="StudentGrade.php?id_object=1" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Показать!</a>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h2>Русский язык</h2>
                    <a href="StudentGrade.php?id_object=2" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Показать!</a>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h2>Биология</h2>
                    <a href="StudentGrade.php?id_object=3" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Показать!</a>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h2>Химия</h2>
                    <a href="StudentGrade.php?id_object=4" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Показать!</a>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <h2>История</h2>
                    <a href="StudentGrade.php?id_object=5" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Показать!</a>
                </div>
                <div class="logout"><a href="logout.php">Выйти</a></div>
            </div>
        </div>
    </div>
			<?	
		}
	?><?php
	if ($_SESSION['status'] === 'teacher') {
	?>
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
            <a class="offcanvas"><span></span><span></span><span></span></a>
			<div class="content" style="max-width: 600px;">
				<h1>Hello <b><?php echo $_SESSION["username"]; ?></b></h1>
				<?php if($_SESSION['algebra'] === 1){?>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					<h2>algebra</h2>
					<a href="AdminGrade.php?id_object=1" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Find out!</a>
				</div>
				<?}?><?php if($_SESSION['russian_language'] === 1){?>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					<h2>russian_language</h2>
					<a href="AdminGrade.php?id_object=2" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Find out!</a>
				</div>
				<?}?><?php if($_SESSION['Biology'] === 1){?>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					<h2>Biology</h2>
					<a href="AdminGrade.php?id_object=3" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Find out!</a>
				</div>
				<?}?><?php if($_SESSION['Chemistry'] === 1){?>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					<h2>Chemistry</h2>
					<a href="AdminGrade.php?id_object=4" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Find out!</a>
				</div>
				<?}?><?php if($_SESSION['History'] === 1){?>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					<h2>History</h2>
					<a href="AdminGrade.php?id_object=5" style="display: inline-flex; align-items: center; padding: 5px 10px; margin-left: 10px; text-decoration: none; background-color: #6E44FF; color: #FFF; border-radius: 5px;">Find out!</a>
				</div>
				<?}?>
				<div class="logout"><a href="logout.php">Log out</a></div>
			</div>
		</div>
	</div>
	<?	
}
?>
	<script src="main.js"></script>
</body>
</html>