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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Goodcard - track your collection of Soccer player cards</title>
</head>
<body>

<h1>Add a player to your collection</h1><a></a>
<a href="create.php">Add a new player</a>

<h1>Goodcard - track your collection of Soccer player cards</h1>
<div class="table-responsive">
    <table class="table table-success table-striped align-midle">>				<!-- create an table object -->
    <tr>            <!-- "tr" represents a row -->
        <th>ID</th>     <!-- use "th" to indicate header row -->
        <th>Name</th>
        <th>Nationality</th>
        <th>Position</th>
        <th>Club</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Detail</th>
    </tr>
    <tr>
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
            <a href="delete.php?id=<?=$row['id']?>&name=<?=$row['name']?>&country=<?=$row['country']?>&position=<?=$row['position']?>&club=<?=$row['club']?>&age=<?=$row['age']?>">Delete</a>
        </td>
        <td>
            <a href="index.php?id=<?=$row['id']?>&action=show">Detail</a>
        </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</body>