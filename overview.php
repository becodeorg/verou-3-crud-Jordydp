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
    </tr>
        <?php foreach ($_SESSION['cards'] as $card) : ?>
        <td><?=$card['id']?></td>
        <td><?=$card['name']?></td>
        <td><?=$card['country']?></td>
        <td><?=$card['position']?></td>
        <td><?=$card['club']?></td>
        <td><?=$card['age']?></td>
    <tr>
    <?php endforeach;?>
</body>