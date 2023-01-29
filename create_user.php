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
    <title>Document</title>
</head>
<body>
    <div class="main">
        <?php
            $localhost = $_POST['localhost_'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db_name = $_POST['database_'];
        
            $available_priv = array('select','insert','delete','update','drop','index','alter','create_temporary_tables',
                                'lock_tables','create_view','create_routine','show_view','alter_routine','execute',
                                'event','trigger','grant','references', 
                                );

            $priv = [];
            foreach($available_priv as $permission){
                if(isset($_POST[$permission] )){
                    $priv[] = $_POST[$permission];
                }
            }
            $grants = implode(", ",$priv);

            $conn = mysqli_connect($localhost,'root','password',$db_name);	

            if($conn){
                try {
                    $query = "CREATE USER '".$username."'@'".$localhost."' IDENTIFIED BY '".$password."';";
                    mysqli_query($conn, $query);
                    $query = "GRANT $grants ON $db_name.* TO '$username'@'$localhost';";
                    mysqli_query($conn, $query);
                    echo "<script> alert('success') </script>";
                    echo '<script>window.location.href="index.html"</script>';
                }
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();
                }
                
            }else{
                echo "failed";
            }   
        ?>
    </div>
</body>
</html>

<!-- GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, 
LOCK TABLES, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EXECUTE, EVENT, TRIGGER 
ON *.* TO 'new_user'@'localhost'; -->
