<?php
require_once "config.php";
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
			<?php if($_GET["object"]==1){ ?>
			<div class="right">
                <a class="offcanvas"><span></span><span></span><span></span></a>
				<div class="content">
					<?php
						if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])){
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);

							$sql = "SELECT * FROM algebra WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								if(mysqli_num_rows($result) > 0){
									foreach($result as $row){
										$data1 = $row["05.01"];
										$data2 = $row["08.02"];
										$data3 = $row["09.02"];
										$data4 = $row["23.02"];
										$data5 = $row["01.03"];
										$data6 = $row["25.03"];
										$data7 = $row["02.04"];
										$data8 = $row["20.04"];
										$data9 = $row["27.05"];
										$data10 = $row["13.06"];
										$data11 = $row["12.07"];
										$data12 = $row["17.07"];
										$data13 = $row["30.08"];
										$data14 = $row["09.09"];
										$data15 = $row["07.12"];
										
									}
									echo "<h3>Rating updates</h3>
									<form method='post'>
										<input type='hidden' name='id' value='$userid' />
										<p>05.01: <input type='number' name='data1' value='$data1' /></p>
										<p>08.02: <input type='number' name='data2' value='$data2' /></p>
										<p>09.02: <input type='number' name='data3' value='$data3' /></p>
										<p>23.02: <input type='number' name='data4' value='$data4' /></p>
										<p>01.03: <input type='number' name='data5' value='$data5' /></p>
										<p>25.03: <input type='number' name='data6' value='$data6' /></p>
										<p>02.04: <input type='number' name='data7' value='$data7' /></p>
										<p>20.04: <input type='number' name='data8' value='$data8' /></p>
										<p>27.05: <input type='number' name='data9' value='$data9' /></p>
										<p>13.06: <input type='number' name='data10' value='$data10' /></p>
										<p>12.07: <input type='number' name='data11' value='$data11' /></p>
										<p>17.07: <input type='number' name='data12' value='$data12' /></p>
										<p>30.08: <input type='number' name='data13' value='$data13' /></p>
										<p>09.09: <input type='number' name='data14' value='$data14' /></p>
										<p>07.12: <input type='number' name='data15' value='$data15' /></p>
										<input type='submit' value='Save'>
									</form>"; //algebra
								}
							}
							else{
								echo "<div>The user was not found</div>";
							}
							mysqli_free_result($result);
						} 

						elseif (isset($_POST["id"])) {
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);
					
							$data1 = mysqli_real_escape_string($DataBase, $_POST["data1"]);
							$data2 = mysqli_real_escape_string($DataBase, $_POST["data2"]);
							$data3 = mysqli_real_escape_string($DataBase, $_POST["data3"]);
							$data4 = mysqli_real_escape_string($DataBase, $_POST["data4"]);
							$data5 = mysqli_real_escape_string($DataBase, $_POST["data5"]);
							$data6 = mysqli_real_escape_string($DataBase, $_POST["data6"]);
							$data7 = mysqli_real_escape_string($DataBase, $_POST["data7"]);
							$data8 = mysqli_real_escape_string($DataBase, $_POST["data8"]);
							$data9 = mysqli_real_escape_string($DataBase, $_POST["data9"]);
							$data10 = mysqli_real_escape_string($DataBase, $_POST["data10"]);
							$data11 = mysqli_real_escape_string($DataBase, $_POST["data11"]);
							$data12 = mysqli_real_escape_string($DataBase, $_POST["data12"]);
							$data13 = mysqli_real_escape_string($DataBase, $_POST["data13"]);
							$data14 = mysqli_real_escape_string($DataBase, $_POST["data14"]);
							$data15 = mysqli_real_escape_string($DataBase, $_POST["data15"]);
							$sql = "UPDATE algebra 
									SET `05.01` = '$data1', 
										`08.02` = '$data2', 
										`09.02` = '$data3', 
										`23.02` = '$data4', 
										`01.03` = '$data5', 
										`25.03` = '$data6', 
										`02.04` = '$data7', 
										`20.04` = '$data8', 
										`27.05` = '$data9', 
										`13.06` = '$data10', 
										`12.07` = '$data11', 
										`17.07` = '$data12', 
										`30.08` = '$data13', 
										`09.09` = '$data14', 
										`07.12` = '$data15' 
									WHERE id_users = '$userid'";
								
							
							if($result = mysqli_query($DataBase, $sql)){
								header("Location: AdminGrade.php?id_object=1");
							}
							else{
								echo "<a>Введено не верное значение</a>";
							}
						}
						else{
							echo "Incorrect data";
						}
					?>
					<a href="../source/AdminGrade.php?id_object=1">Go back</a>
				</div>
			</div>
			<?}?>
			<?php if($_GET["object"]==2){ ?>
			<div class="right">
                <a class="offcanvas"><span></span><span></span><span></span></a>
				<div class="content">
					<?php
						if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])){
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);

							$sql = "SELECT * FROM rus WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								if(mysqli_num_rows($result) > 0){
									foreach($result as $row){
										$data1 = $row["11.01"];
										$data2 = $row["23.02"];
										$data3 = $row["29.02"];
										$data4 = $row["25.03"];
										$data5 = $row["08.04"];
										$data6 = $row["02.05"];
										$data7 = $row["09.06"];
										$data8 = $row["30.06"];
										$data9 = $row["21.07"];
										$data10 = $row["16.08"];
										$data11 = $row["10.09"];
										$data12 = $row["12.09"];
										$data13 = $row["20.09"];
										$data14 = $row["08.11"];
										$data15 = $row["28.11"];
									}
									echo "<h3>Rating updates</h3>
									<form method='post'>
										<input type='hidden' name='id' value='$userid' />
										<p>11.01: <input type='number' name='data1' value='$data1' /></p>
										<p>23.02: <input type='number' name='data2' value='$data2' /></p>
										<p>29.02: <input type='number' name='data3' value='$data3' /></p>
										<p>25.03: <input type='number' name='data4' value='$data4' /></p>
										<p>08.04: <input type='number' name='data5' value='$data5' /></p>
										<p>02.05: <input type='number' name='data6' value='$data6' /></p>
										<p>09.06: <input type='number' name='data7' value='$data7' /></p>
										<p>30.06: <input type='number' name='data8' value='$data8' /></p>
										<p>21.07: <input type='number' name='data9' value='$data9' /></p>
										<p>16.08: <input type='number' name='data10' value='$data10' /></p>
										<p>10.09: <input type='number' name='data11' value='$data11' /></p>
										<p>12.09: <input type='number' name='data12' value='$data12' /></p>
										<p>20.09: <input type='number' name='data13' value='$data13' /></p>
										<p>08.11: <input type='number' name='data14' value='$data14' /></p>
										<p>28.11: <input type='number' name='data15' value='$data15' /></p>
										<input type='submit' value='Save'>
									</form>"; //rus
								}
							}
							else{
								echo "<div>The user was not found</div>";
							}
							mysqli_free_result($result);
						} 

						elseif (isset($_POST["id"])) {
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);
					
							$data1 = mysqli_real_escape_string($DataBase, $_POST["data1"]);
							$data2 = mysqli_real_escape_string($DataBase, $_POST["data2"]);
							$data3 = mysqli_real_escape_string($DataBase, $_POST["data3"]);
							$data4 = mysqli_real_escape_string($DataBase, $_POST["data4"]);
							$data5 = mysqli_real_escape_string($DataBase, $_POST["data5"]);
							$data6 = mysqli_real_escape_string($DataBase, $_POST["data6"]);
							$data7 = mysqli_real_escape_string($DataBase, $_POST["data7"]);
							$data8 = mysqli_real_escape_string($DataBase, $_POST["data8"]);
							$data9 = mysqli_real_escape_string($DataBase, $_POST["data9"]);
							$data10 = mysqli_real_escape_string($DataBase, $_POST["data10"]);
							$data11 = mysqli_real_escape_string($DataBase, $_POST["data11"]);
							$data12 = mysqli_real_escape_string($DataBase, $_POST["data12"]);
							$data13 = mysqli_real_escape_string($DataBase, $_POST["data13"]);
							$data14 = mysqli_real_escape_string($DataBase, $_POST["data14"]);
							$data15 = mysqli_real_escape_string($DataBase, $_POST["data15"]);
							$sql = "UPDATE rus 
									SET `11.01` = '$data1', 
										`23.02` = '$data2', 
										`29.02` = '$data3', 
										`25.03` = '$data4', 
										`08.04` = '$data5', 
										`02.05` = '$data6', 
										`09.06` = '$data7', 
										`30.06` = '$data8', 
										`21.07` = '$data9', 
										`16.08` = '$data10', 
										`10.09` = '$data11', 
										`12.09` = '$data12', 
										`20.09` = '$data13', 
										`08.11` = '$data14', 
										`28.11` = '$data15' 
									WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								header("Location: AdminGrade.php?id_object=2");
							}
							else{
								
								echo "<a>Введено не верное значение</a>";
							}
						}
						else{
							echo "Incorrect data";
						}
					?>
					<a href="../source/MainPage.php">Go back</a>
				</div>
			</div>
			<?}?>
			<?php if($_GET["object"]==3){?>
			<div class="right">
                <a class="offcanvas"><span></span><span></span><span></span></a>
				<div class="content">
					<?php
						if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])){
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);

							$sql = "SELECT * FROM Biology WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
 
								if(mysqli_num_rows($result) > 0){
 
									foreach($result as $row){
										$data1 = $row["07.01"];
										$data2 = $row["28.01"];
										$data3 = $row["23.02"];
										$data4 = $row["07.03"];
										$data5 = $row["13.03"];
										$data6 = $row["29.03"];
										$data7 = $row["07.04"];
										$data8 = $row["10.04"];
										$data9 = $row["22.04"];
										$data10 = $row["22.05"];
										$data11 = $row["02.06"];
										$data12 = $row["19.07"];
										$data13 = $row["21.07"];
										$data14 = $row["12.09"];
										$data15 = $row["27.10"];
										
									}
									echo "<h3>Rating updates</h3>
									<form method='post'>
										<input type='hidden' name='id' value='$userid' />
										<p>07.01: <input type='number' name='data1' value='$data1' /></p>
										<p>28.01: <input type='number' name='data2' value='$data2' /></p>
										<p>23.02: <input type='number' name='data3' value='$data3' /></p>
										<p>07.03: <input type='number' name='data4' value='$data4' /></p>
										<p>13.03: <input type='number' name='data5' value='$data5' /></p>
										<p>29.03: <input type='number' name='data6' value='$data6' /></p>
										<p>07.04: <input type='number' name='data7' value='$data7' /></p>
										<p>10.04: <input type='number' name='data8' value='$data8' /></p>
										<p>22.04: <input type='number' name='data9' value='$data9' /></p>
										<p>22.05: <input type='number' name='data10' value='$data10' /></p>
										<p>02.06: <input type='number' name='data11`' value='$data11' /></p>
										<p>19.07: <input type='number' name='data12' value='$data12' /></p>
										<p>21.07: <input type='number' name='data13' value='$data13' /></p>
										<p>12.09: <input type='number' name='data14' value='$data14' /></p>
										<p>27.10: <input type='number' name='data15' value='$data15' /></p>
										<input type='submit' value='Save'>
									</form>"; //biology
								}
							}
							else{
								echo "<div>The user was not found</div>";
							}
							mysqli_free_result($result);
						} 

						elseif (isset($_POST["id"])) {
					
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);
					
							$data1 = mysqli_real_escape_string($DataBase, $_POST["data1"]);
							$data2 = mysqli_real_escape_string($DataBase, $_POST["data2"]);
							$data3 = mysqli_real_escape_string($DataBase, $_POST["data3"]);
							$data4 = mysqli_real_escape_string($DataBase, $_POST["data4"]);
							$data5 = mysqli_real_escape_string($DataBase, $_POST["data5"]);
							$data6 = mysqli_real_escape_string($DataBase, $_POST["data6"]);
							$data7 = mysqli_real_escape_string($DataBase, $_POST["data7"]);
							$data8 = mysqli_real_escape_string($DataBase, $_POST["data8"]);
							$data9 = mysqli_real_escape_string($DataBase, $_POST["data9"]);
							$data10 = mysqli_real_escape_string($DataBase, $_POST["data10"]);
							$data11 = mysqli_real_escape_string($DataBase, $_POST["data11"]);
							$data12 = mysqli_real_escape_string($DataBase, $_POST["data12"]);
							$data13 = mysqli_real_escape_string($DataBase, $_POST["data13"]);
							$data14 = mysqli_real_escape_string($DataBase, $_POST["data14"]);
							$data15 = mysqli_real_escape_string($DataBase, $_POST["data15"]);
							$sql = "UPDATE Biology 
									SET `07.01` = '$data1', 
										`28.01` = '$data2', 
										`23.02` = '$data3', 
										`07.03` = '$data4', 
										`13.03` = '$data5', 
										`29.03` = '$data6', 
										`07.04` = '$data7', 
										`10.04` = '$data8', 
										`22.04` = '$data9', 
										`22.05` = '$data10', 
										`02.06` = '$data11', 
										`19.07` = '$data12', 
										`21.07` = '$data13', 
										`12.09` = '$data14', 
										`27.10` = '$data15' 
									WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								header("Location: AdminGrade.php?id_object=3");
							}
							else{
								
								echo "<a>Введено не верное значение</a>";
							}
						}
						else{
							echo "Incorrect data";
						}
					?>
					<a href="../source/MainPage.php">Go back</a>
				</div>
			</div>
			<?}?>
			<?php if($_GET["object"]==4){ ?>
			<div class="right">
                <a class="offcanvas"><span></span><span></span><span></span></a>
				<div class="content">
					<?php
						if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])){
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);

							$sql = "SELECT * FROM Chemistry WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								if(mysqli_num_rows($result) > 0){
									foreach($result as $row){
										$data1 = $row["14.01"];
										$data2 = $row["18.01"];
										$data3 = $row["25.01"];
										$data4 = $row["12.02"];
										$data5 = $row["25.03"];
										$data6 = $row["13.05"];
										$data7 = $row["20.05"];
										$data8 = $row["29.05"];
										$data9 = $row["25.06"];
										$data10 = $row["17.07"];
										$data11 = $row["30.08"];
										$data12 = $row["10.09"];
										$data13 = $row["18.09"];
										$data14 = $row["12.10"];
										$data15 = $row["09.11"];
									}
									echo "<h3>Rating updates</h3>
									<form method='post'>
										<input type='hidden' name='id' value='$userid' />
										<p>14.01: <input type='number' name='data1' value='$data1' /></p>
										<p>18.01: <input type='number' name='data2' value='$data2' /></p>
										<p>25.01: <input type='number' name='data3' value='$data3' /></p>
										<p>12.02: <input type='number' name='data4' value='$data4' /></p>
										<p>25.03: <input type='number' name='data5' value='$data5' /></p>
										<p>13.05: <input type='number' name='data6' value='$data6' /></p>
										<p>20.05: <input type='number' name='data7' value='$data7' /></p>
										<p>29.05: <input type='number' name='data8' value='$data8' /></p>
										<p>25.06: <input type='number' name='data9' value='$data9' /></p>
										<p>17.07: <input type='number' name='data10' value='$data10' /></p>
										<p>30.08: <input type='number' name='data11' value='$data11' /></p>
										<p>10.09: <input type='number' name='data12' value='$data12' /></p>
										<p>18.09: <input type='number' name='data13' value='$data13' /></p>
										<p>12.10: <input type='number' name='data14' value='$data14' /></p>
										<p>09.11: <input type='number' name='data15' value='$data15' /></p>
										<input type='submit' value='Save'>
									</form>"; //chemistry
									}
							}
							else{
								echo "<div>The user was not found</div>";
							}
							mysqli_free_result($result);
						} 

						elseif (isset($_POST["id"])) {
					
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);
					
							$data1 = mysqli_real_escape_string($DataBase, $_POST["data1"]);
							$data2 = mysqli_real_escape_string($DataBase, $_POST["data2"]);
							$data3 = mysqli_real_escape_string($DataBase, $_POST["data3"]);
							$data4 = mysqli_real_escape_string($DataBase, $_POST["data4"]);
							$data5 = mysqli_real_escape_string($DataBase, $_POST["data5"]);
							$data6 = mysqli_real_escape_string($DataBase, $_POST["data6"]);
							$data7 = mysqli_real_escape_string($DataBase, $_POST["data7"]);
							$data8 = mysqli_real_escape_string($DataBase, $_POST["data8"]);
							$data9 = mysqli_real_escape_string($DataBase, $_POST["data9"]);
							$data10 = mysqli_real_escape_string($DataBase, $_POST["data10"]);
							$data11 = mysqli_real_escape_string($DataBase, $_POST["data11"]);
							$data12 = mysqli_real_escape_string($DataBase, $_POST["data12"]);
							$data13 = mysqli_real_escape_string($DataBase, $_POST["data13"]);
							$data14 = mysqli_real_escape_string($DataBase, $_POST["data14"]);
							$data15 = mysqli_real_escape_string($DataBase, $_POST["data15"]);
							$sql = "UPDATE Chemistry 
									SET `14.01` = '$data1', 
										`18.01` = '$data2', 
										`25.01` = '$data3', 
										`12.02` = '$data4', 
										`25.03` = '$data5', 
										`13.05` = '$data6', 
										`20.05` = '$data7', 
										`29.05` = '$data8', 
										`25.06` = '$data9', 
										`17.07` = '$data10', 
										`30.08` = '$data11', 
										`10.09` = '$data12', 
										`18.09` = '$data13', 
										`12.10` = '$data14', 
										`09.11` = '$data15' 
									WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								header("Location: AdminGrade.php?id_object=4");
							}
							else{
								echo $sql;
								echo "<a>Введено не верное значение</a>";
							}
						}
						else{
							echo "Incorrect data";
						}
					?>
					<a href="../source/MainPage.php">Go back</a>
				</div>
			</div>
			<?}?>
			<?php if($_GET["object"]==5){ ?>
			<div class="right">
                <a class="offcanvas"><span></span><span></span><span></span></a>
				<div class="content">
					<?php
						if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])){
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);

							$sql = "SELECT * FROM History WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								if(mysqli_num_rows($result) > 0){
									foreach($result as $row){
										$data1 = $row["03.01"];
										$data2 = $row["05.01"];
										$data3 = $row["20.01"];
										$data4 = $row["14.02"];
										$data5 = $row["20.03"];
										$data6 = $row["10.05"];
										$data7 = $row["02.06"];
										$data8 = $row["15.07"];
										$data9 = $row["26.07"];
										$data10 = $row["01.08"];
										$data11 = $row["28.08"];
										$data12 = $row["26.10"];
										$data13 = $row["09.11"];
										$data14 = $row["06.12"];
										$data15 = $row["18.12"];
									}
									echo "<h3>Rating updates</h3>
									<form method='post'>
										<input type='hidden' name='id' value='$userid' />
										<p>03.01: <input type='number' name='data1' value='$data1' /></p>
										<p>05.01: <input type='number' name='data2' value='$data2' /></p>
										<p>20.01: <input type='number' name='data3' value='$data3' /></p>
										<p>14.02: <input type='number' name='data4' value='$data4' /></p>
										<p>20.03: <input type='number' name='data5' value='$data5' /></p>
										<p>10.05: <input type='number' name='data6' value='$data6' /></p>
										<p>02.06: <input type='number' name='data7' value='$data7' /></p>
										<p>15.07: <input type='number' name='data8' value='$data8' /></p>
										<p>26.07: <input type='number' name='data9' value='$data9' /></p>
										<p>01.08: <input type='number' name='data10' value='$data10' /></p>
										<p>28.08: <input type='number' name='data11' value='$data11' /></p>
										<p>26.10: <input type='number' name='data12' value='$data12' /></p>
										<p>09.11: <input type='number' name='data13' value='$data13' /></p>
										<p>06.12: <input type='number' name='data14' value='$data14' /></p>
										<p>18.12: <input type='number' name='data15' value='$data15' /></p>
										<input type='submit' value='Save'>
									</form>"; //history
								}
							}
							else{
								echo "<div>The user was not found</div>";
							}
							mysqli_free_result($result);
						} 

						elseif (isset($_POST["id"])) {
					
							$userid = mysqli_real_escape_string($DataBase, $_GET["id"]);
					
							$data1 = mysqli_real_escape_string($DataBase, $_POST["data1"]);
							$data2 = mysqli_real_escape_string($DataBase, $_POST["data2"]);
							$data3 = mysqli_real_escape_string($DataBase, $_POST["data3"]);
							$data4 = mysqli_real_escape_string($DataBase, $_POST["data4"]);
							$data5 = mysqli_real_escape_string($DataBase, $_POST["data5"]);
							$data6 = mysqli_real_escape_string($DataBase, $_POST["data6"]);
							$data7 = mysqli_real_escape_string($DataBase, $_POST["data7"]);
							$data8 = mysqli_real_escape_string($DataBase, $_POST["data8"]);
							$data9 = mysqli_real_escape_string($DataBase, $_POST["data9"]);
							$data10 = mysqli_real_escape_string($DataBase, $_POST["data10"]);
							$data11 = mysqli_real_escape_string($DataBase, $_POST["data11"]);
							$data12 = mysqli_real_escape_string($DataBase, $_POST["data12"]);
							$data13 = mysqli_real_escape_string($DataBase, $_POST["data13"]);
							$data14 = mysqli_real_escape_string($DataBase, $_POST["data14"]);
							$data15 = mysqli_real_escape_string($DataBase, $_POST["data15"]);
							$sql = "UPDATE History 
									SET `03.01` = '$data1', 
										`05.01` = '$data2', 
										`20.01` = '$data3', 
										`14.02` = '$data4', 
										`20.03` = '$data5', 
										`10.05` = '$data6', 
										`02.06` = '$data7', 
										`15.07` = '$data8', 
										`26.07` = '$data9', 
										`01.08` = '$data10', 
										`28.08` = '$data11', 
										`26.10` = '$data12', 
										`09.11` = '$data13', 
										`06.12` = '$data14', 
										`18.12` = '$data15' 
									WHERE id_users = '$userid'";
							if($result = mysqli_query($DataBase, $sql)){
								header("Location: AdminGrade.php?id_object=5");
							}
							else{
								
								echo "<a>Введено не верное значение</a>";
							}
						}
						else{
							echo "Incorrect data";
						}
					?>
					<a href="../source/MainPage.php">Go back</a>
				</div>
			</div>
			<?}?>
		</div>
	<script src="main.js"></script>
</body>
</html>