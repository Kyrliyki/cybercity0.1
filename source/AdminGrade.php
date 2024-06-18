<!DOCTYPE html>
<html>
<head>
<title>Оценки</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />
</head>
<link rel="stylesheet" href="main.css">
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
            <div class="content">
                <h2>Change students grades</h2>
				<?php
				require_once "config.php";

				$sql = "SELECT *
						FROM users";
				if($result = $DataBase->query($sql)){
					echo "<table class='table-2'>
                            <thead>
                            <tr>
								<th>Login &nbsp</th>
								<th>Math &nbsp</th>
								<th>Russian &nbsp</th>
								<th>Biology &nbsp</th>
								<th>Chemistry &nbsp</th>
								<th>History &nbsp</th>
							</tr>
                            </thead><tbody>";
					foreach($result as $row){
						if ($row["status"] != 'admin'){
							echo "<tr>";
								echo "<td>" . $row["username"] . "</td>";
								echo "<td>" . $row["algebra"] . "</td>";
								echo "<td>" . $row["russian_language"] . "</td>";
								echo "<td>" . $row["Biology"] . "</td>";
								echo "<td>" . $row["Chemistry"] . "</td>";
								echo "<td>" . $row["History"] . "</td>";
								echo "<td><a href='UpdateGrade.php?id=" . $row["id"] . "'>Change</a></td>";
							echo "</tr>";
						}
						
					}
					echo "</tbody></table>";
					$result->free();
				} else{
					echo "Ошибка: " . $DataBase->error;
				}
				$DataBase->close();
				?>
                <a href="../source/MainPage.php">Go back</a>
            </div>
        </div>
    </div>
	<script src="main.js"></script>
</body>
</html>