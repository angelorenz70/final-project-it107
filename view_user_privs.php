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
            $data = array(' INSERT',' DELETE',' UPDATE','SELECT', ' FILE');
            $structure = array(' CREATE',' ALTER',' INDEX',' DROP',' CREATE TEMPORARY TABLES',
            ' SHOW VIEW',' CREATE ROUTINE',' ALTER ROUTINE',' EXECUTE',' CREATE VIEW',' EVENT',' TRIGGER');
            $administration = array(' GRANT', ' SUPER' ,' PROCESS' ,' RELOAD' ,' SHUTDOWN', ' SHOW DATABASES',
            ' LOCK TABLES', ' REFERENCES', ' REPLICATION CLIENT', ' REPLICATION SLAVE',' CREATE USER'
        );

            $localhost = $_POST['localhost'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db_name = $_POST['database'];

            $conn = mysqli_connect($localhost, $username,$password,$db_name);	
            
            $grants = array();
            if($conn){
                echo "Hello, ".$username."<br>";
                echo "Below are your permissions on database:".$db_name."<br>";
                
                $result = mysqli_query($conn, "SHOW GRANTS FOR '".$username."'@'".$localhost."'");
                while ($row = mysqli_fetch_row($result)) {
                    $grants[] = $row;
                }
            }else{
                echo "Error";
            }
            if($username == 'root'){
                $output = $grants[0][0];
            }else{
                $output = $grants[1][0];
            }

            preg_match("/GRANT (.*?) ON/", $output, $matches);
            $permissions = explode(",", $matches[1]);
            
            echo "<ul>";
            
            $type = '- ';
            foreach ($permissions as $grant) {
                echo "<li>" . $grant . "</li>";
                if (in_array($grant, $data)) {
                    $type = 'DATA';
                }else if(in_array($grant, $structure)){
                    $type = 'STRUCTURE';
                }else if(in_array($grant, $administration)){
                    $type = 'ADMINISTRATION';
                }
                echo "<li>" . $type . "</li>";
            }
            echo "</ul>";

        ?>
    </div>
</body>
</html>
