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
        <form class="login-main" method="POST" action="create_user.php">
            <div>
                <label for="">Username</label><br>
                <input type="text" id="username" name="username"><br>
            </div>
            <div>
                <select name="localhost_" id="localhost">
                    <option value="localhost">localhost</option>
                </select>
            </div>
            <div>
                <label for="">Password</label><br>
                <input type="password" id="password" name="password"><br>
            </div>
            <div>
                <select name="database_" id="database">
                    <option value="it_107">It_107</option>
                    <option value="global">Global</option>
                    <option value="mark">Mark</option>
                </select>
            </div>
            <div>
                <label for="">Priviledeges</label>
                <div>
                    <table class="read-main">
                        <tr style="color:blue">
                            <th>DATA</th>
                            <th>STRUCTURE</th>
                            <th>ADMINISTRATION</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="select" value="select">
                                <label for="select">select</label><br>
                                <input type="checkbox" name="insert" value="insert">
                                <label for="insert">insert</label><br>
                                <input type="checkbox" name="update" value="update">
                                <label for="update">update</label><br>
                                <input type="checkbox" name="delete" value="delete">
                                <label for="delete">delete</label><br>
                                <input type="checkbox" name="file" value="file option">
                                <label for="file">file</label><br>
                            </td>
                            <td>
                                <input type="checkbox" name="create" value="create">
                                <label for="create">create</label><br>
                                <input type="checkbox" name="alter" value="alter">
                                <label for="alter">alter</label><br>
                                <input type="checkbox" name="index" value="index">
                                <label for="index">index</label><br>
                                <input type="checkbox" name="drop" value="drop">
                                <label for="drop">drop</label><br>
                                <input type="checkbox" name="create_temporary_tables" value="create temporary tables">
                                <label for="create temporary tables">create temporary tables</label><br>
                                <input type="checkbox" name="show_view" value="show view">
                                <label for="show view">show view</label><br>
                                <input type="checkbox" name="create_routine" value="create routine">
                                <label for="create routine">create routine</label><br>
                                <input type="checkbox" name="alter_routine" value="alter routine">
                                <label for="alter routine">alter routine</label><br>
                                <input type="checkbox" name="execute" value="execute">
                                <label for="execute">execute</label><br>
                                <input type="checkbox" name="create_view" value="create view">
                                <label for="create view">create view</label><br>
                                <input type="checkbox" name="event" value="event">
                                <label for="event">event</label><br>
                                <input type="checkbox" name="trigger" value="trigger">
                                <label for="trigger">trigger</label><br>
                            </td>
                            <td>
                                <input type="checkbox" name="grant" value="grant option">
                                <label for="grant">grant</label><br>
                                <input type="checkbox" name="super" value="super">
                                <label for="super">super</label><br>
                                <input type="checkbox" name="process" value="process">
                                <label for="process">process</label><br>
                                <input type="checkbox" name="reload" value="reload">
                                <label for="reload">reload</label><br>
                                <input type="checkbox" name="shutdown" value="shutdown">
                                <label for="shutdown">shutdown</label><br>
                                <input type="checkbox" name="show_database" value="show databases">
                                <label for="show database">show database</label><br>
                                <input type="checkbox" name="lock_tables" value="lock tables">
                                <label for="lock tables">lock tables</label><br>
                                <input type="checkbox" name="references" value="references">
                                <label for="references">references</label><br>
                                <input type="checkbox" name="replication_client" value="replication client">
                                <label for="replication client">replication client</label><br>
                                <input type="checkbox" name="replication_slave" value="replication slave">
                                <label for="replocation slave">replication slave</label><br>
                                <input type="checkbox" name="create_user" value="create user">
                                <label for="create user">create user</label><br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</script>
</body>
</html>