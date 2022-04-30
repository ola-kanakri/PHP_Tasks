
<?php

if (isset($_POST['email'])) 

{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
}


    echo "Email: ".$email."<br>";
    echo "Password: ".$pass."<br>";

?>