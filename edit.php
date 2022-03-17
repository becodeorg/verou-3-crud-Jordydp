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
<h1>Edit and Update a player in your collection</h1><a></a>
<form method="post" action="index.php?id=<?= $_GET['id'] ?>&action=edit">
    <label for="name">First name:</label><br>
    <input type="text" name="name" id="name" placeholder="name"><br>
    <label for="name">country:</label><br>
    <input type="text" name="country" id="country" placeholder="country"><br>
    <label for="name">Position:</label><br>
    <input type="text" name="position" id="position" placeholder="position"><br>
    <label for="name">Club</label><br>
    <input type="text" name="club" id="club" placeholder="club"><br>
    <label for="name">Age:</label><br>
    <input type="number" name="age" id="age" placeholder="age"><br>
    <input type="submit" name="action" value="edit">
</form>

</body>
</html>