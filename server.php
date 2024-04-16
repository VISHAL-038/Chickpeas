<?php
    $insert = false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $server = 'localhost';
        $username = "root";
        $password = '';
        $db = 'Chickpeas';
        
        $con = mysqli_connect($server, $username, $password,$db);

        $name = $_POST["name"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $people = $_POST["people"];
        $message = $_POST["message"];
    
        $sql = "INSERT INTO `reservation` (`name`, `email`, `date`, `time`, `people`, `message`) VALUES ('$name','$email','$date','$time','$people','$message')";
        echo $sql;

        if($con->query($sql)==true){
            echo "Successfully inserted";
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
    }
?>
