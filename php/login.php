$conn = mysqli_connect('localhost','user_stage','123456789','entreprises');
            if(!$conn){
              echo("<script> alert('Cannot connect to database')</script>");
            }
            else{
                $id = mysqli_real_escape_string ($conn , $_POST["id"]) ;
                $name = mysqli_real_escape_string ($conn , $_POST["name"]) ;
                $ville = mysqli_real_escape_string ($conn , $_POST["ville"]) ;
                $tele = mysqli_real_escape_string ($conn , $_POST["tele"]) ;
                $email = mysqli_real_escape_string ($conn , $_POST["email"]) ;
                $forme = "" ;
                if(!empty($_POST['forme'])) {
                    $forme = mysqli_real_escape_string ($conn , $_POST["forme"]) ;
                }
                $date = mysqli_real_escape_string ($conn , $_POST["date"]) ;
                $genre = "" ;
                if(!empty($_POST['genre'])) {
                    $genre = mysqli_real_escape_string ($conn , $_POST["genre"]) ;
                }--
                $capitale = mysqli_real_escape_string ($conn , $_POST["capital"]) ;
                $sql = "insert into idcaracteristiques values ('$id','$name','$ville','$tele','$email','$forme','$date','$genre','$capitale')" ;
                mysqli_query($conn,$sql) ;
            }