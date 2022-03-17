<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Detail</h1>
<table>				<!-- create an table object -->
    <tr>
        <th>ID</th>     <!-- "tr" represents a row -->
        <th>Name</th>	<!-- use "th" to indicate header row -->
        <th>Nationality</th>
        <th>Position</th>
        <th>Club</th>
        <th>Age</th>
    </tr>
    <tr>
        <td><?=$row->id?></td>
        <td><?=$row->name?></td>
        <td><?=$row->country?></td>
        <td><?=$row->position?></td>
        <td><?=$row->club?></td>
        <td><?=$row->age?></td>
    </tr>
</body>
</html>