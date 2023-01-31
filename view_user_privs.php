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
            $structure = array(' CREATE',' ALTER',' INDEX','DROP','CREATE TEMPORARY TABLES',
            ' SHOW VIEW',' CREATE ROUTINE',' ALTER ROUTINE',' EXECUTE',' CREATE VIEW',' EVENT',' TRIGGER');
            $administration = array(' GRANT', ' SUPER' ,' PROCESS' ,' RELOAD' ,' SHUTDOWN', ' SHOW DATABASES',
            ' LOCK TABLES', ' REFERENCES', ' REPLICATION CLIENT', ' REPLICATION SLAVE',' CREATE USER'
            );

            $localhost = $_POST['localhost_'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db_name = $_POST['database'];

            try {
                if($db_name == 'Global'){
                    $conn = mysqli_connect($localhost, $username,$password);
                }else{
                    $conn = mysqli_connect($localhost, $username,$password,$db_name);
                }
            } catch (Exception $e) {
                echo "<script>alert('Access Denied: You do not have sufficient permissions to access this database.');</script>";
                echo '<script>window.location.href="index.php"</script>';
            }
            

            $grants = array();
            $size = 0;
            if($conn){
                echo "<div class='success'>Hello, ".$username."</div>";
                echo "<div class='success'>Below are your permissions on database: ".$db_name."</div>";
                
                $result = mysqli_query($conn, "SHOW GRANTS FOR '".$username."'@'".$localhost."'");
                
                while ($row = mysqli_fetch_row($result)) {
                    $grants[] = $row;
                    $size = $size + 1;
                }
            }else{
                echo "<div class='error'>Error</div>";
            }
            if($db_name == 'Global'){
                $output = $grants[0][0];
            }else{
                if($size == 2){
                    $output = $grants[1][0];
                }else{
                    $output = $grants[0][0];
                }
            }

            preg_match("/GRANT (.*?) ON/", $output, $matches);
            $permissions = explode(",", $matches[1]);
           
    
            echo "<table class='table-container'>";
                echo "<tr class='table-row'><th class='table-head'>Privileges</th><th>Type</th></tr>";
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
            <form method="GET" action="index.php">
                <input class="logout-submit" type="submit" value="Log out">
            </form>
        </div>
    </body>
</html>
