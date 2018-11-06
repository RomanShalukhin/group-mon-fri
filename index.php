 <?php
 error_reporting(E_ALL);
    //array

   $employees1 = [
       'age'=> 61,
       'weight' => 75.35,
       'name' => 'Mike',
       'surname' => 'Smith',
       'can_swim' => false
       ];


    $employees2 = [
       'age'=> 34,
       'weight' => 70.35,
       'name' => 'Steve',
       'surname' => 'Anderson',
       'can_swim' => true
       ];

    $employees = [$employees1 , $employees2];

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
            <th>Cam swim</th>
        </tr>
        <tr>
            <td><?=$employees[0] ['name'] ?></td>
            <td><?=$employees[0] ['surname']?></td>
            <td><?=$employees[0] ['age']?></td>
            <td><?=$employees[0] ['weight'] ?></td>
            <td><?=$employees[0] ['can_swim'] ?></td>

        </tr>

        <tr>
            <td><?=$employees[1] ['name'] ?></td>
            <td><?=$employees[1] ['surname']?></td>
            <td><?=$employees[1] ['age']?></td>
            <td><?=$employees[1] ['weight'] ?></td>
            <td><?=$employees[1] ['can_swim'] ?></td>
        </tr>

    </table>

    <hr>

    <?php




    ?>






</body>
</html>

