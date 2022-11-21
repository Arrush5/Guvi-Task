<?php
if(isset($_POST["#loginbtn"])){
    $connection = new mysqli("localhost" ,'root' , '' ,'mytaskdb');

    $email=$connection->real_escape_string($_POST["emailphp"]);
    $password=$connection->real_escape_string($_POST["pwdphp"]);

    $data = $connection->query("SELECT ID FROM 'user login' WHERE Email = '$email' AND Password='$password'");
    if($data->num_rows >0){
        exit('success');
    }
    else
    exit('failed');

    exit($email."=".$password);
}
?>