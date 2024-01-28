<?php
    $con = mysqli_connect("localhost","root","","student");
?>

<?php
        include("dbcon.php");


        if (isset($_POST["login"])) {
            $username = mysqli_real_escape_string($con, $_POST["username"]);
            $password = mysqli_real_escape_string($con, $_POST["password"]);

            $user_search = "SELECT * FROM `table` WHERE username='$username'";
            $query = mysqli_query($con, $user_search);

            $user_count = mysqli_num_rows($query);
            if ($user_count) {
                $user_pass = mysqli_fetch_assoc($query);

                $db_pass = $user_pass['password'];

                $pass_decode = password_verify($password, $db_pass);
                
                if($db_pass){
                    echo'login successfully';
                }else{
                    echo 'Incorrect Password';
                }
            }else{
                echo 'Invalid email';
            }
        }
    ?>