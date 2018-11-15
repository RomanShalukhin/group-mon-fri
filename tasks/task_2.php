<?php

    $isFormSent = false;

  if($_POST) {
        $isFormSent = true;
        $prime_numbers = [2, 3];

    if (!is_numeric($_POST['max_number'])) {
                die('max number is not a number');
       }

    $max_number = (int)$_POST['max_number'];




    for ($number = 4; $number < $max_number; $number++) {
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
            
           
            if ($result) {
                $prime_numbers[] = $number;
                
            }
    }
        $prime_numbers = implode(',  ', $prime_numbers);
    
        }
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"
    <title>Get peimes from range</title>
</head>
<body>
    <h3>TODO: add min </h3>
    <form method='post'>
        <input type="number" name="max_number" min="4" required/>
        <button>Go</button>
    </form>

    <?php if($isFormSent) : ?>
       Primes: <?=$prime_numbers?>
    <?php endif ?>
    
    
</body>
</html>