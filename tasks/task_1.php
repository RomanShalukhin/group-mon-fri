

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"
    <title>Check if number is prime number</title>
</head>
<body>
    <form method='post'>
        <input type="number" name="number" min="2" />
        <button>Go</button>
    </form>
    
    <?php 
        if($_POST) {
            
            if (!is_numeric($_POST['number'])) {
                die('not a number');
            }
            
            $number = (int)$_POST['number'];
            $result = true;
            
            
            if ($number == 2) {
                $result = true; 
            }else {
                //7 => 2,3,4,5,6
                for($i = 2; $i < $number; $i++){
                    if($number % $i == 0){
                        $result = false;
                        break;
                    }
                }
            
            }
            
            echo "Result: " . ($result ? '' : 'Not ') . 'prime';
        }      
     ?>

</body>
</html>