<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
        <div class="right">
            <a class="offcanvas"><span></span><span></span><span></span></a>
            <div class="content">
                <h2>This is your grades</h2>
                <?php
                session_start();
                require_once "config.php";

                if(isset($_SESSION['username'])){
                    $user = $_SESSION['username'];
                    $sql = "SELECT algebra, russian_language, Biology, Chemistry, History FROM users WHERE username = ?";
                    if ($stmt = $DataBase->prepare($sql)) {
                        $stmt->bind_param("s", $user);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            echo "<table class='table-2'>
                                    <thead>
                                    <tr>
                                        <th>Math</th>
                                        <th>Russian</th>
                                        <th>Biology</th>
                                        <th>Chemistry</th>
                                        <th>History</th>
                                    </tr></thead><tbody>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["algebra"] . "</td>";
                                echo "<td>" . $row["russian_language"] . "</td>";
                                echo "<td>" . $row["Biology"] . "</td>";
                                echo "<td>" . $row["Chemistry"] . "</td>";
                                echo "<td>" . $row["History"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        } else {
                            echo "<p>No grades found for this user.</p>";
                        }
                        $stmt->close();
                    } else {
                        echo "Error: " . $DataBase->error;
                    }
                    $DataBase->close();
                } else {
                    echo "<p>Please log in to view your scores.</p>";
                }
                ?>
                <a href="../source/MainPage.php">Go back</a>
            </div>
        </div>
    </div>
	<script src="main.js"></script>
</body>
</html>
