<?php

require_once ('Connector/Crud.php');

$db = new Crud();
$data = $db->read();

?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/clndr.min.js"></script>
    <link rel="stylesheet" href="css/calendar.css" />
</head>
<body>
    <div class="title">
        <h1>Pair-programming Planner</h1>
    </div>
    <div class="content">
        <p>Content will go here</p>
            <div class="users">
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

        </div>
        <div class="addnew">

        </div>
    </div>
</body>
</html>