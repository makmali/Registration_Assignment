    <?php
    $server = "localhost";
    $username = "root";
    $password ="";
    $dbname = "sample";


    $conn = mysqli_connect($server,$username,$password,$dbname);
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
    }

    if(isset($_POST['submit'])){

            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['gender']) && !empty($_POST['dob'])){
        
                $name = $_POST['name'];
                $email = $_POST['email'];
                $contact = $_POST['contact']; 
                $gender = $_POST['gender']; 
                $dob = $_POST['dob']; 

        
                $query = "insert into forms(name,email,contact,gender,dob) values ('$name' , '$email' , '$contact' , '$gender' , '$dob')";
        
                $run = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
                if($run){
                    echo "Submitted";
                    $sql = "SELECT * FROM forms";
                    $retval =  mysqli_query($conn,$sql) or die(mysqli_error());
                    
                    if (mysqli_num_rows($retval) > 0) {
                        while($row = mysqli_fetch_assoc($retval)) {
                            echo "<html>";
                            echo "<head>";
                            echo "<style>";
                            echo "table,th,td{ border :1px solid black;}";
                            echo "</style>";
                            echo "</head>";
                            echo "<body>";
                            echo "<table style=width:100%>";
                            echo "<tr>";
                                echo "<th>Name</th>";
                                echo "<th>E-mail</th>";
                                echo "<th>Contact</th>";
                                echo "<th>Gender</th>";
                                 echo "<th>Date of Birth</th>";
                            echo "</tr>";
                            echo "<tr>";
                            while($row = mysqli_fetch_array($retval)){
                                 echo "<td>" . $row['name'] . "</td>";
                                 echo "<td>" . $row['email'] . "</td>";
                                 echo "<td>" . $row['contact'] . "</td>";
                                 echo "<td>" . $row['gender'] . "</td>";
                                 echo "<td>" . $row['dob'] . "</td>";
                                 echo "</tr>";
                            }
                            echo "</table>";
                            echo "</body>";
                            echo "</html>";
                        }
                    } else {
                        echo "0 results";
                    }
                    
                
                    
                    echo "Fetched data successfully\n";
                    
                    
                }
                else{
                    echo"Not submitted";
                }
            }
            else{
                echo "all fields Required";
            }
        }





    ?>