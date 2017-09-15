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
                    <th>Name</th>
                    <th>Slack id</th>
                </tr>
                <?php foreach ($usersData as $users): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['firstname'].' '.$user['lastname'] ?></td>
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
                    <th>User A</th>
                    <th>User B</th>
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
            <form action="">
                <label for="slack_id1">Slack ID: </label><br>
                <input type="text" name="slack_id1" placeholder="Enter slack id for person 1...">
                <br><br>
                <label for="slack_id2">Slack ID: </label><br>
                <input type="text" name="slack_id2" placeholder="Enter slack id for person 2...">
                <br><br>
                <label for="date">Date: </label><br>
                <input type="date" name="slack_id2" placeholder="Enter date of planned session...">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>