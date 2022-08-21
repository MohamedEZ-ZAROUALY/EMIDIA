<?php

        $conn = mysqli_connect('localhost','useremidia','123456789','emidia');
            if(!$conn){
              echo("<script> alert('Cannot connect to database')</script>");
            }
            else{
                $name = mysqli_real_escape_string ($conn , $_POST["name"]) ;
                $email = mysqli_real_escape_string ($conn , $_POST["email"]) ;
                $password = password_hash(mysqli_real_escape_string ($conn , $_POST["password"])) ;
                $sql = "insert into user(username,email,password) values ('$name','$email','$password')" ;
                mysqli_query($conn,$sql) ;
            }

?>
