<!DOCTYPE html>
<html>
<head>
    <title>Оценки</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
</head>
<?php
session_start();
if (isset($_SESSION["id"])) {
    $id_user = $_SESSION["id"];
}

?>
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
                <?php if($_GET["id_object"]==2) {
                    echo "<h2>Русский язык</h2>";
                    require_once "config.php";
                    $sql = "SELECT t1.* , t2.surname , t2.status
						FROM rus AS t1 JOIN users AS t2
                        WHERE t1.id_users=t2.id and t1.id_users= '$id_user'";
                    if ($result = $DataBase->query($sql)) {
                        echo "<table class='table-2'>
                            <thead><tr>
                                <th>Фамилия &nbsp</th>
                                <th>11.01 &nbsp</th>
                                <th>23.02 &nbsp</th>
                                <th>29.02 &nbsp</th>
                                <th>25.03 &nbsp</th>
                                <th>08.04 &nbsp</th>
                                <th>02.05 &nbsp</th>
                                <th>09.06 &nbsp</th>
                                <th>30.06 &nbsp</th>
                                <th>21.07 &nbsp</th>
                                <th>16.08 &nbsp</th>
                                <th>10.09 &nbsp</th>
                                <th>12.09 &nbsp</th>
                                <th>20.09 &nbsp</th>
                                <th>08.11 &nbsp</th>
                                <th>28.11 &nbsp</th>
                            </tr></thead><tbody>"; //rus


                        foreach ($result as $row) {
                            if ($row["status"] != 'admin' && $row["status"] != 'teacher') {
                                echo "<tr>";
                                echo "<td>" . $row["surname"] . "</td>";
                                echo "<td>" . $row["11.01"] . "</td>";
                                echo "<td>" . $row["23.02"] . "</td>";
                                echo "<td>" . $row["29.02"] . "</td>";
                                echo "<td>" . $row["25.03"] . "</td>";
                                echo "<td>" . $row["08.04"] . "</td>";
                                echo "<td>" . $row["02.05"] . "</td>";
                                echo "<td>" . $row["09.06"] . "</td>";
                                echo "<td>" . $row["30.06"] . "</td>";
                                echo "<td>" . $row["21.07"] . "</td>";
                                echo "<td>" . $row["16.08"] . "</td>";
                                echo "<td>" . $row["10.09"] . "</td>";
                                echo "<td>" . $row["12.09"] . "</td>";
                                echo "<td>" . $row["20.09"] . "</td>";
                                echo "<td>" . $row["08.11"] . "</td>";
                                echo "<td>" . $row["28.11"] . "</td>";
                                echo "</tr>"; //rus
                            }
                        }
                        echo "</tbody></table>";
                        $result->free();
                    } else {
                        echo "Ошибка: " . $DataBase->error;
                    }
                    $DataBase->close();
                }
                else if ($_GET["id_object"]==5) {
                    require_once "config.php";
                    echo "<h2>История</h2>";
                    $sql = "SELECT t1.* , t2.surname , t2.status
    						FROM History AS t1 JOIN users AS t2
                            WHERE t1.id_users=t2.id and t1.id_users= '$id_user'";
                    if($result = $DataBase->query($sql)){
                        echo "<table class='table-2'>
                                <thead><tr>
                                    <th>Фамилия &nbsp</th>
                                    <th>03.01 &nbsp</th>
                                    <th>05.01 &nbsp</th>
                                    <th>20.01 &nbsp</th>
                                    <th>14.02 &nbsp</th>
                                    <th>20.03 &nbsp</th>
                                    <th>10.05 &nbsp</th>
                                    <th>02.06 &nbsp</th>
                                    <th>15.07 &nbsp</th>
                                    <th>26.07 &nbsp</th>
                                    <th>01.08 &nbsp</th>
                                    <th>28.08 &nbsp</th>
                                    <th>26.10 &nbsp</th>
                                    <th>09.11 &nbsp</th>
                                    <th>06.12 &nbsp</th>
                                    <th>18.12 &nbsp</th>
                                </tr></thead><tbody>"; //history


                        foreach($result as $row){
                            if ($row["status"] != 'admin' && $row["status"] != 'teacher'){
                                echo "<tr>";
                                echo "<td>" . $row["surname"] . "</td>";
                                echo "<td>" . $row["03.01"] . "</td>";
                                echo "<td>" . $row["05.01"] . "</td>";
                                echo "<td>" . $row["20.01"] . "</td>";
                                echo "<td>" . $row["14.02"] . "</td>";
                                echo "<td>" . $row["20.03"] . "</td>";
                                echo "<td>" . $row["10.05"] . "</td>";
                                echo "<td>" . $row["02.06"] . "</td>";
                                echo "<td>" . $row["15.07"] . "</td>";
                                echo "<td>" . $row["26.07"] . "</td>";
                                echo "<td>" . $row["01.08"] . "</td>";
                                echo "<td>" . $row["28.08"] . "</td>";
                                echo "<td>" . $row["26.10"] . "</td>";
                                echo "<td>" . $row["09.11"] . "</td>";
                                echo "<td>" . $row["06.12"] . "</td>";
                                echo "<td>" . $row["18.12"] . "</td>";
                                echo "</tr>"; //history
                            }
                        }
                        echo "</tbody></table>";
                        $result->free();
                    } else{
                        echo "Ошибка: " . $DataBase->error;
                    }
                    $DataBase->close();
                }
                else if ($_GET["id_object"]==4) {
                    require_once "config.php";
                    echo "<h2>Химия</h2>";
                    $sql = "SELECT t1.* , t2.surname , t2.status
    						FROM Chemistry AS t1 JOIN users AS t2
                            WHERE t1.id_users=t2.id and t1.id_users= '$id_user'";
                    if($result = $DataBase->query($sql)){
                        echo "<table class='table-2'>
                                <thead><tr>
                                    <th>Фамилия &nbsp</th>
                                    <th>14.01 &nbsp</th>
                                    <th>18.01 &nbsp</th>
                                    <th>25.01 &nbsp</th>
                                    <th>12.02 &nbsp</th>
                                    <th>25.03 &nbsp</th>
                                    <th>13.05 &nbsp</th>
                                    <th>20.05 &nbsp</th>
                                    <th>29.05 &nbsp</th>
                                    <th>25.06 &nbsp</th>
                                    <th>17.07 &nbsp</th>
                                    <th>30.08 &nbsp</th>
                                    <th>10.09 &nbsp</th>
                                    <th>18.09 &nbsp</th>
                                    <th>12.10 &nbsp</th>
                                    <th>09.11 &nbsp</th>
                                </tr></thead><tbody>"; //chemistry
                        foreach($result as $row){
                            if ($row["status"] != 'admin' && $row["status"] != 'teacher'){
                                echo "<tr>";
                                echo "<td>" . $row["surname"] . "</td>";
                                echo "<td>" . $row["14.01"] . "</td>";
                                echo "<td>" . $row["18.01"] . "</td>";
                                echo "<td>" . $row["25.01"] . "</td>";
                                echo "<td>" . $row["12.02"] . "</td>";
                                echo "<td>" . $row["25.03"] . "</td>";
                                echo "<td>" . $row["13.05"] . "</td>";
                                echo "<td>" . $row["20.05"] . "</td>";
                                echo "<td>" . $row["29.05"] . "</td>";
                                echo "<td>" . $row["25.06"] . "</td>";
                                echo "<td>" . $row["17.07"] . "</td>";
                                echo "<td>" . $row["30.08"] . "</td>";
                                echo "<td>" . $row["10.09"] . "</td>";
                                echo "<td>" . $row["18.09"] . "</td>";
                                echo "<td>" . $row["12.10"] . "</td>";
                                echo "<td>" . $row["09.11"] . "</td>";
                                echo "</tr>"; //chemistry
                            }
                        }
                        echo "</tbody></table>";
                        $result->free();
                    } else{
                        echo "Ошибка: " . $DataBase->error;
                    }
                    $DataBase->close();
                }
                else if ($_GET["id_object"]==1) {
                    require_once "config.php";
                    echo "<h2>Алгебра</h2>";
                    $sql = "SELECT t1.* , t2.surname , t2.status
    						FROM algebra AS t1 JOIN users AS t2
                            WHERE t1.id_users=t2.id and t1.id_users= '$id_user'";
                    if($result = $DataBase->query($sql)){
                        echo "<table class='table-2'>
                                <thead><tr>
                                    <th>Фамилия &nbsp</th>
                                    <th>05.01 &nbsp</th>
                                    <th>08.02 &nbsp</th>
                                    <th>09.02 &nbsp</th>
                                    <th>23.02 &nbsp</th>
                                    <th>01.03 &nbsp</th>
                                    <th>25.03 &nbsp</th>
                                    <th>02.04 &nbsp</th>
                                    <th>20.04 &nbsp</th>
                                    <th>27.05 &nbsp</th>
                                    <th>13.06 &nbsp</th>
                                    <th>12.07 &nbsp</th>
                                    <th>17.07 &nbsp</th>
                                    <th>30.08 &nbsp</th>
                                    <th>09.09 &nbsp</th>
                                    <th>07.12 &nbsp</th>
                                </tr></thead><tbody>"; //algebra
                        foreach($result as $row){
                            if ($row["status"] != 'admin' && $row["status"] != 'teacher'){
                                echo "<tr>";
                                echo "<td>" . $row["surname"] . "</td>";
                                echo "<td>" . $row["05.01"] . "</td>";
                                echo "<td>" . $row["08.02"] . "</td>";
                                echo "<td>" . $row["09.02"] . "</td>";
                                echo "<td>" . $row["23.02"] . "</td>";
                                echo "<td>" . $row["01.03"] . "</td>";
                                echo "<td>" . $row["25.03"] . "</td>";
                                echo "<td>" . $row["02.04"] . "</td>";
                                echo "<td>" . $row["20.04"] . "</td>";
                                echo "<td>" . $row["27.05"] . "</td>";
                                echo "<td>" . $row["13.06"] . "</td>";
                                echo "<td>" . $row["12.07"] . "</td>";
                                echo "<td>" . $row["17.07"] . "</td>";
                                echo "<td>" . $row["30.08"] . "</td>";
                                echo "<td>" . $row["09.09"] . "</td>";
                                echo "<td>" . $row["07.12"] . "</td>";
                                echo "</tr>"; //algebra
                            }
                        }
                        echo "</tbody></table>";
                        $result->free();
                    } else{
                        echo "Ошибка: " . $DataBase->error;
                    }
                    $DataBase->close();
                }
                else if ($_GET["id_object"]==3) {
                    echo "<h2>Биология</h2>";
                    require_once "config.php";

                    $sql = "SELECT t1.* , t2.surname , t2.status
    						FROM Biology AS t1 JOIN users AS t2
                            WHERE t1.id_users=t2.id and t1.id_users= '$id_user'";
                    if($result = $DataBase->query($sql)){
                        echo "<table class='table-2'>
                                <thead><tr>
                                    <th>Фамилия &nbsp</th>
                                    <th>07.01 &nbsp</th>
                                    <th>28.01 &nbsp</th>
                                    <th>23.02 &nbsp</th>
                                    <th>07.03 &nbsp</th>
                                    <th>13.03 &nbsp</th>
                                    <th>29.03 &nbsp</th>
                                    <th>07.04 &nbsp</th>
                                    <th>10.04 &nbsp</th>
                                    <th>22.04 &nbsp</th>
                                    <th>22.05 &nbsp</th>
                                    <th>02.06 &nbsp</th>
                                    <th>19.07 &nbsp</th>
                                    <th>21.07 &nbsp</th>
                                    <th>12.09 &nbsp</th>
                                    <th>27.10 &nbsp</th>
                                </tr></thead><tbody>"; //biology
                        foreach($result as $row){
                            if ($row["status"] != 'admin' && $row["status"] != 'teacher'){
                                echo "<tr>";
                                echo "<td>" . $row["surname"] . "</td>";
                                echo "<td>" . $row["07.01"] . "</td>";
                                echo "<td>" . $row["28.01"] . "</td>";
                                echo "<td>" . $row["23.02"] . "</td>";
                                echo "<td>" . $row["07.03"] . "</td>";
                                echo "<td>" . $row["13.03"] . "</td>";
                                echo "<td>" . $row["29.03"] . "</td>";
                                echo "<td>" . $row["07.04"] . "</td>";
                                echo "<td>" . $row["10.04"] . "</td>";
                                echo "<td>" . $row["22.04"] . "</td>";
                                echo "<td>" . $row["22.05"] . "</td>";
                                echo "<td>" . $row["02.06"] . "</td>";
                                echo "<td>" . $row["19.07"] . "</td>";
                                echo "<td>" . $row["21.07"] . "</td>";
                                echo "<td>" . $row["12.09"] . "</td>";
                                echo "<td>" . $row["27.10"] . "</td>";
                                echo "</tr>"; //biology
                            }
                        }
                        echo "</tbody></table>";
                        $result->free();
                    } else{
                        echo "Ошибка: " . $DataBase->error;
                    }
                    $DataBase->close();
                }
                ?>

                <a href="../source/MainPage.php">Назад</a>
            </div>
        </div>
</div>
<script src="main.js"></script>
</body>
</html>