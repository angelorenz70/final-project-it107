<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Page</title>
    <link rel="icon" href="images/tab-head.png">

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
                echo "<div class='success'>Hello, ".$username."</div>";
                echo "<div class='success'>Below are your permissions on database: ".$db_name."</div>";

                $result = mysqli_query($conn, "SHOW GRANTS FOR '".$username."'@'".$localhost."'");
                while ($row = mysqli_fetch_row($result)) {
                    $grants[] = $row;
                }
            }else{
                echo "<div class='error'>Error</div>";
            }
            if($username == 'root'){
                $output = $grants[0][0];
            }else{
                $output = $grants[1][0];
            }

            preg_match("/GRANT (.*?) ON/", $output, $matches);
            $permissions = explode(",", $matches[1]);
    
            echo "<table class='table-container'>";
                echo "<tr class='table-row'><th class='table-head'>Grants</th><th>Type</th></tr>";
                    $type = '- ';
                    foreach ($permissions as $grant) {
                        echo "<tr class='table-row'><td>" . $grant . "</td>";
                        if (in_array($grant, $data)) {
                            $type = 'DATA';
                        }else if(in_array($grant, $structure)){
                            $type = 'STRUCTURE';
                        }else if(in_array($grant, $administration)){
                            $type = 'ADMINISTRATION';
                        }
                        echo "<td class='table-data'>" . $type . "</td></tr>";
                    }
            echo "</table>";
            ?>
        </div>
    </body>
</html>
