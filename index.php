<?php

require_once ('Connector/Crud.php');

$db = new Crud();
$db->read();

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

    </div>
</body>
</html>