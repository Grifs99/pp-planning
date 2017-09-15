<?php

require_once ('Connector/Crud.php');

$db = new Crud();
$data = $db->read();

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
                <?php foreach ($data as $user): ?>
                    <?php foreach ($user as $t): ?>
                        <tr>
                            <td><?php echo $t['firstname'] ?></td>
                            <td><?php echo $t['lastname'] ?></td>
                            <td><?php echo $t['slack'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="sessions">
            <div class="section-title">PP Sessions</div>

        </div>
        <div class="addnew">
            <div class="section-title">Add a new session</div>

        </div>
    </div>
</body>
</html>