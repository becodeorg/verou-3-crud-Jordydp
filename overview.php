<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Soccer player cards</title>
</head>
<body>

<h1>Add a player to your collection</h1><a></a>
<a href="create.php">Add a new player</a>

<h1>Goodcard - track your collection of Soccer player cards</h1>

<table>				<!-- create an table object -->
    <tr>
        <th>ID</th>     <!-- "tr" represents a row -->
        <th>Name</th>	<!-- use "th" to indicate header row -->
        <th>Nationality</th>
        <th>Position</th>
        <th>Club</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
        <?php foreach ($cards as $row) : ?>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['country']?></td>
        <td><?=$row['position']?></td>
        <td><?=$row['club']?></td>
        <td><?=$row['age']?></td>
        <td>
            <a href="edit.php?id=<?=$row['id']?>">edit</a>
        </td>
        <td>
            <a>Delete</a>
        </td>
    <tr>
    <?php endforeach;?>
</body>