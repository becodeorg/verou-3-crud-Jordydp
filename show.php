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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>Detail</h1>
<div class="table-responsive">
<table class="table table-success table-striped align-midle">				<!-- create an table object -->
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
</div>
</body>
</html>