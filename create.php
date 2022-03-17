<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Add a player to your collection</h1><a></a>
<form method="get" action="index.php">
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
    <input type="submit" class="btn btn-success stretched-link" name="action" value="create">
</form>

</body>
</html>