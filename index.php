<?php

require_once ('Connector/Crud.php');

$users = new Crud('Data/Users.json');
$usersData = $users->read();

$sessions = new Crud('Data/Planner.json');
$sessionsData = $sessions->read();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pair Programing Planner</title>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/clndr.min.js"></script>
    <link rel="stylesheet" href="css/calendar.css" />
    <link rel="shortcut icon" href="/images/favicon.ico">
</head>
<body>
    <div class="title">
        <h1>Pair-programming Planner</h1>
    </div>
    <div class="content">
        <div class="users">
            <div class="section-title">User list</div>
            <table>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>SlackId</th>
                </tr>
                <?php foreach ($usersData as $users): ?>
                    <?php foreach ($users as $user): ?>

                        <tr>
                            <td><?php echo $user['firstname'] ?></td>
                            <td><?php echo $user['lastname'] ?></td>
                            <td><?php echo $user['slack'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="sessions">
            <div class="section-title">PP Sessions</div>
            <table>
                <tr>
                    <th>UserA</th>
                    <th>UserB</th>
                    <th>Date</th>
                </tr>
                <?php foreach ($sessionsData as $sessions): ?>
                    <?php foreach ($sessions as $session): ?>

                        <tr>
                            <td><?php echo $session['userA'] ?></td>
                            <td><?php echo $session['userB'] ?></td>
                            <td><?php echo $session['date'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="addnew">
            <div class="section-title">Add a new session</div>

        </div>
    </div>
</body>
</html>