<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Left Panel</title>
</head>
<body background="./Images/WoodenFloor.jpg">
<h3>Adroit Mail</h3>
<h5>Last Refresh: <?= time()?></h5>
<h5><a href="dashboard.php">(Check Mail)</a></h5>

<div>
    <ul>
        <li><a href="./inbox">Inbox</a></li>
        <li><a href="./inbox">Drafts</a></li>
        <li><a href="./inbox">Sent</a></li>
        <li><a href="./inbox">Trash</a></li>
    </ul>
</div>
</body>
</html>