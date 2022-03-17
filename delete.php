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
<?php echo "<pre>";
print_r($_GET);
echo "</pre>";
?>
<h1>Are you sure you want to delete this player</h1>
<form method="post" action="index.php?id=<?= $_GET['id'] ?>&action=delete">
    <label for="name">First name:</label><br>
    <input type="text" name="name" id="name" placeholder="name" value="<?=$_GET['name']?>"><br>
    <label for="name">country:</label><br>
    <input type="text" name="country" id="country" placeholder="country" value="<?=$_GET['country']?>"><br>
    <label for="name">Position:</label><br>
    <input type="text" name="position" id="position" placeholder="position" value="<?=$_GET['position']?>"><br>
    <label for="name">Club</label><br>
    <input type="text" name="club" id="club" placeholder="club" value="<?=$_GET['club']?>"><br>
    <label for="name">Age:</label><br>
    <input type="number" name="age" id="age" placeholder="age" value="<?=$_GET['age']?>"><br>
    <input type="submit" name="action" value="delete">
</form>

</body>
</html>