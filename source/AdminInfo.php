<!DOCTYPE html>
<html>
<head>
<title>Информация</title>
<meta charset="utf-8" />
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a class="offcanvas"><span></span><span></span><span></span></a>
            <div class="content" style="max-width: 900px;">
                <h2>Изменение оценок</h2>
				<?php
				require_once "config.php";

				$sort_list = array(
					'id_asc'   => '`id`',
					'id_desc'  => '`id` DESC',
					'username_asc'  => '`username`',
					'username_desc' => '`username` DESC',
					'status_asc'   => '`status`',
					'status_desc'  => '`status` DESC',
					'surname_asc'   => '`surname`',
					'surname_desc'  => '`surname` DESC',
					'firstname_asc'   => '`firstname`',
					'firstname_desc'  => '`firstname` DESC',
					'patronymic_asc'  => '`patronymic`',
					'patronymic_desc' => '`patronymic` DESC', 
					'dob_asc'   => '`dob`',
					'dob_desc'  => '`dob` DESC',  
				);

				/* Проверка GET-переменной */
				$sort = @$_GET['sort'];
				if (array_key_exists($sort, $sort_list)) {
					$sort_sql = $sort_list[$sort];
				} else {
					$sort_sql = reset($sort_list);
				}
				/* Функция вывода ссылок */
				function sort_link_th($title, $a, $b) {
					$sort = @$_GET['sort'];
				
					if ($sort == $a) {
						return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>▲</i></a>';
					} elseif ($sort == $b) {
						return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>▼</i></a>';  
					} else {
						return '<a href="?sort=' . $a . '">' . $title . '</a>';  
					}
				}

				if($_SERVER["REQUEST_METHOD"] === "POST"){
					$name=mysqli_real_escape_string($DataBase ,$_POST['search']) ; 
					$sql = "SELECT *
							FROM users 
							WHERE id LIKE N'%$name%'
							OR username LIKE N'%$name%' 
							OR status LIKE N'%$name%' 
							OR surname LIKE N'%$name%' 
							OR firstname LIKE N'%$name%' 
							OR patronymic LIKE N'%$name%' 
							OR DATE_FORMAT(dob, '%Y-%m-%d') LIKE N'%$name%'
							ORDER BY {$sort_sql}";
				} 
				else{ 
					$sql = "SELECT *
					FROM users ORDER BY {$sort_sql}";
				} 


				if($result = $DataBase->query($sql)){?>
						<table class="table-2"><thead>
							<tr>
								<th>id &nbsp</th>
								<th>Логин &nbsp</th>
								<th>Статус &nbsp</th>
								<th>Фамилия &nbsp</th>
								<th>Имя &nbsp</th>
								<th>Отчество &nbsp</th>
								<th>Дата рождения &nbsp</th>
							</tr></thead><tbody>
					<?php
					foreach($result as $row){
						if ($row["status"] != 'admin'){
							echo "<tr>";
							echo "<td>" . $row["id"] . "</td>";
							echo "<td>" . $row["username"] . "</td>";
							echo "<td>" . $row["status"] . "</td>";
							echo "<td>" . $row["surname"] . "</td>";
							echo "<td>" . $row["firstname"] . "</td>";
							echo "<td>" . $row["patronymic"] . "</td>";
							echo "<td>" . $row["dob"] . "</td>";
							echo "<td><a href='UpdateInfo.php?id=" . $row["id"] . "'>Изменить</a></td>";
							echo "<td>
									<form action='DeleteUser.php' method='post'>
										<input type='hidden' name='id' value='" . $row["id"] . "' />
										<input type='submit' value='Удалить'>
									</form>
								</td>";
							echo "</tr>";
						}
						
					}
					echo "</tbody></table>";
					$result->free();
				} else{
					echo "Error: " . $DataBase->error;
				}


				$DataBase->close();
				?>
                <a href="../source/MainPage.php">Назад</a>
            </div>
        </div>
    </div>
	<script src="main.js"></script>
</body>
</html>