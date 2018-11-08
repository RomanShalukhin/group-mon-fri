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

    $employees3 = [
       'age'=> 43,
       'weight' => 112.35,
       'name' => 'Hank',
       'surname' => 'Jobs',
       'can_swim' => true
       ];


    $employees = [$employees1 , $employees2, $employees3];

    foreach ($employees as $k => $e) {



      }




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
            <th>Can swim</th>
        </tr>
        <?php
        foreach($employees as $employee) : ?>
        <tr>
            <td><?=$employee ['name'] ?></td>
            <td><?=$employee ['surname']?></td>
            <td><?=$employee ['age']?></td>
            <td><?=$employee ['weight'] ?></td>
            <td><?=$employee ['can_swim'] ? 'Yes': 'No'?></td>
        </tr>
           <?php endforeach; ?>
    </table>

    <hr>

    <?php




    ?>






</body>
</html>

