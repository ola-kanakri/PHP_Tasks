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

        $serverName = 'localhost:3306';
        $userName = 'root';
        $password = '';
        $DB_name = 'company';

        $conn = mysqli_connect($serverName,$userName,$password, $DB_name );

        if ($conn)
        {
            echo "Connection with server is done properly.";
        }
        else
        {
            die('There is a problem connection ..' .mysqli_connect_error());
        }
    
    ?>
    
</body>



</html>