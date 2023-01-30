<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .main{
            height: 100vh;
            
            display: grid;
            grid-template-rows: auto 1fr;
            justify-items: center;
            row-gap: 20px;
        }
        .main .login-main{
            grid-row: 1/2;
            display: grid;
            grid-auto-rows: auto;
            row-gap: 5px;
        }
    </style>
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/view_user.css">
</head>
<body>
    <div class="main">
        <?php
            $localhost = $_POST['localhost'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db_name = $_POST['database'];

            $conn = mysqli_connect($localhost, $username,$password,$db_name);	
            if($conn){
                echo "Hello, ".$username."<br>";
                echo "Below are your permissions on database:".$db_name."<br>";
                

                $result = mysqli_query($conn, "SHOW GRANTS FOR '".$username."'@'".$localhost."'");
                while ($row = mysqli_fetch_row($result)) {
                    echo implode(', ', $row) . "<br>";
                }


            }else{
                echo "Error";
            }
        ?>
    </div>
</body>
</html>
