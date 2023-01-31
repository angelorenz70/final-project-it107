<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT107-Final_Project</title>
    <link rel="icon" href="images/tab-head.png">

    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <div class="main">

        <h1 class="welcome-title">Welcome to Machine Problem 1</h1>
        <div class="form-container">
            <form class="login-main" method="POST" action="view_user_privs.php">
                <div class="label-container">
                    <label class="label" for="username">Username</label><br>
                    <input class="username" type="text" id="username" name="username"><br>
                </div>
    
                <div class="selection-container">
                    <div class="location-container">
                        <select class="localhost" name="localhost" id="localhost">
                            <option class="localhost-option" value="localhost">Localhost</option>
                            <option class="localhost-option" value="localhost">Online</option>
                        </select>
                    </div>
                    
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "BreechReca111301";
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password);

                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SHOW DATABASES";
                        $result = mysqli_query($conn, $sql);
                    ?>
                    <div class="database-container">
                        <?php
                            echo "<select class='database' name='database' id='database'>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['Database'] . "'>" . $row['Database'] . "</option>";
                            }
                            echo "<option value='global'> Global </option>";
                            echo "</select>";


                            mysqli_close($conn);
                        ?>
                    </div>
                    <!-- <div class="database-container">
                        <select class="database" name="database" id="database">
                            <option class="data-option" value="it_107">IT-107</option>
                            <option class="data-option" value="global">Global</option>
                            <option class="data-option" value="mark">Mark</option>
                        </select>
                    </div> -->
                </div>
    



                <div class="password-container">
                    <label class="password-label" for="password">Password</label><br>
                    <input class="password" type="password" id="password" name="password"><br>
                </div>
    
                <input class="login-submit" type="submit" value="Login">
            </form>
        </div>
        <div class="register-conatainer">
            <form class="register-form" method="POST" action="add_user.php">
                <button class="button" type="submit"> ADD NEW USER </button>
            </form>
        </div>
    </div>
</body>
</html>