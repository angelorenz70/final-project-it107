<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User IT107</title>
    <link rel="icon" href="images/tab-head.png">


    <link rel="stylesheet" href="CSS/add_user.css">
</head>
<body>
    <section class="section-main">
        <div class="main-container">
            <form class="login-main" method="POST" action="create_user.php">

                <div class="username-contatiner">
                        <label class="username" for="">Username</label><br>
                        <input class="username-input" type="text" id="username" name="username"><br>
                </div>

                <div class="localhost-container">
                <label class="username" for="">Local Host</label><br>
                    <select class="localhost" name="localhost_" id="localhost">
                        <option class="localhost-option" value="localhost">localhost</option>
                    </select>
                </div>

                <div class="password-container">
                    <label class="password" for="">Password</label><br>
                    <input class="password-input" type="password" id="password" name="password"><br>
                </div>

                <div class="database-container">
                    <select class="database" name="database_" id="database">
                        <option class="database-option" value="it_107">It_107</option>
                        <option class="database-option" value="global">Global</option>
                        <option class="database-option" value="mark">Mark</option>
                    </select>
                </div> -->

                <div class="privileges-container">
                        <label class="privileges-title" for="">Privileges</label>
                    <div class="table-container">
                        <table class="read-main">
                            <tr class="table-head">
                                <th>DATA</th>
                                <th>STRUCTURE</th>
                                <th>ADMINISTRATION</th>
                            </tr>
                            <tr>
                                <td class="table-column">
                                    <input class="table-checkbox" type="checkbox" name="select" value="select">
                                        <label for="select">select</label><br>
                                    <input class="table-checkbox" type="checkbox" name="insert" value="insert">
                                        <label for="insert">insert</label><br>
                                    <input class="table-checkbox" type="checkbox" name="update" value="update">
                                        <label for="update">update</label><br>
                                    <input class="table-checkbox" type="checkbox" name="delete" value="delete">
                                        <label for="delete">delete</label><br>
                                    <input class="table-checkbox" type="checkbox" name="file" value="file option">
                                        <label for="file">file</label><br>
                                </td>
                                <td class="table-column">
                                    <input class="table-checkbox" type="checkbox" name="create" value="create">
                                        <label for="create">create</label><br>
                                    <input class="table-checkbox" type="checkbox" name="alter" value="alter">
                                        <label for="alter">alter</label><br>
                                    <input class="table-checkbox" type="checkbox" name="index" value="index">
                                        <label for="index">index</label><br>
                                    <input class="table-checkbox" type="checkbox" name="drop" value="drop">
                                        <label for="drop">drop</label><br>
                                    <input class="table-checkbox" type="checkbox" name="create_temporary_tables" value="create temporary tables">
                                        <label for="create temporary tables">create temporary tables</label><br>
                                    <input class="table-checkbox" type="checkbox" name="show_view" value="show view">
                                        <label for="show view">show view</label><br>
                                    <input class="table-checkbox" type="checkbox" name="create_routine" value="create routine">
                                        <label for="create routine">create routine</label><br>
                                    <input class="table-checkbox" type="checkbox" name="alter_routine" value="alter routine">
                                        <label for="alter routine">alter routine</label><br>
                                    <input class="table-checkbox" type="checkbox" name="execute" value="execute">
                                        <label for="execute">execute</label><br>
                                    <input class="table-checkbox" type="checkbox" name="create_view" value="create view">
                                        <label for="create view">create view</label><br>
                                    <input class="table-checkbox" type="checkbox" name="event" value="event">
                                        <label for="event">event</label><br>
                                    <input class="table-checkbox" type="checkbox" name="trigger" value="trigger">
                                        <label for="trigger">trigger</label><br>
                                </td>
                                <td class="table-column">
                                    <input class="table-checkbox" type="checkbox" name="grant" value="grant option">
                                        <label for="grant">grant</label><br>
                                    <input class="table-checkbox" type="checkbox" name="super" value="super">
                                        <label for="super">super</label><br>
                                    <input class="table-checkbox" type="checkbox" name="process" value="process">
                                        <label for="process">process</label><br>
                                    <input class="table-checkbox" type="checkbox" name="reload" value="reload">
                                        <label for="reload">reload</label><br>
                                    <input class="table-checkbox" type="checkbox" name="shutdown" value="shutdown">
                                        <label for="shutdown">shutdown</label><br>
                                    <input class="table-checkbox" type="checkbox" name="show_database" value="show databases">
                                        <label for="show database">show database</label><br>
                                    <input class="table-checkbox" type="checkbox" name="lock_tables" value="lock tables">
                                        <label for="lock tables">lock tables</label><br>
                                    <input class="table-checkbox" type="checkbox" name="references" value="references">
                                        <label for="references">references</label><br>
                                    <input class="table-checkbox" type="checkbox" name="replication_client" value="replication client">
                                        <label for="replication client">replication client</label><br>
                                    <input class="table-checkbox" type="checkbox" name="replication_slave" value="replication slave">
                                        <label for="replocation slave">replication slave</label><br>
                                    <input class="table-checkbox" type="checkbox" name="create_user" value="create user">
                                        <label for="create user">create user</label><br>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <input class="button" type="submit" value="Submit">
            </form>
        </div>
    </section>
</body>
</html>