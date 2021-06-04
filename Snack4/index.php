<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 

        $numbers = range(1, 100);
        shuffle($numbers);


        function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
            $numbers = range($min, $max);
            shuffle($numbers);
            return array_slice($numbers, 0, $quantity);
        }


        print_r( UniqueRandomNumbersWithinRange(0,100,15) );
    


        /* $randomNumber = $rand(1,100);
        
        array [];

        array_push($array, $randomNumber);

        $i = 0;


        $randomNumber2 = $rand(1,100);
        $randomNumber3 = $rand(1,100);
        $randomNumber4 = $rand(1,100);
        $randomNumber5 = $rand(1,100);
        $randomNumber6 = $rand(1,100);
        $randomNumber7 = $rand(1,100);

        while(strpos($array,$randomNumber) !== false && $i < 15){

            $randomNumber = $rand(1,100);

            array_push($array, $randomNumber);
            
            $i++;
        }

        echo $array; */

    ?>


</body>
</html>