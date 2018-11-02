 <?php
 error_reporting(E_ALL);
    $name = 'Mike';
    $Surname = 'Smith';
    $age = 60;
    $canSwim = false;
    $weight = 75.5;
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Document</title>
</head>
<body>


    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td><?=$name ?></td>
            <td><?=$Surname ?></td>
            <td><?=$age ?></td>
            <td><?=$weight ?></td>

        </tr>

    </table>

    <hr>

    <?php


        var_dump(-$age > 20);

    ?>






</body>
</html>

