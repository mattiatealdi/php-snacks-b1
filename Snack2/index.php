<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Ciao</h1>

    <?php 

        $flag_email = false;
        $flag_name = false;
        $accesso = '';

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];


        if(strlen($name) > 3){
            $flag_name = TRUE
        }else{
            $flag_name = FALSE
        }
        
        if(strpos($mail, "@") !== false && strpos($mail, ".") !== false){
            $flag_email = TRUE
        }else{
            $flag_email = FALSE
        }

        if()

        if($flag_email == TRUE && $flag_name == TRUE){
            $accesso = 'Accesso riuscito'
        }else{
            $accesso = 'Accesso negato'
        }
    
    ?>
    

    <h1><?php echo $accesso ?></h1>
    




</body>
</html>