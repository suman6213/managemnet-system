<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="slide-in">

    <?php
    include("dbcon.php");

    if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $user_search = "SELECT * FROM `table` WHERE  username='$username' ";
        $query = mysqli_query($con, $user_search);

        $user_count = mysqli_num_rows($query);

        if ($user_count) {
            $user_pass = mysqli_fetch_assoc($query);

            $db_pass = $user_pass['password'];

            $pass_decode = password_verify($password, $db_pass);

            if ($pass_decode) {
                echo"Login Successfully";
            }else{
                echo "Incorrect Password";
            }
        }else{
            echo "username not found";
        }
    }
    ?>
    <div class="close-btn" id="close">
        <i class="fa-solid fa-circle-xmark"></i>
    </div>

    <div class="main-container">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="">
                <div class="brand-name">
                    <p><span>Bhaktapur</span><br>Multiple Campus</p>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="heading">
                <h3>Welcome Back</h3>
                <p>Sign in to continue</p>
            </div>

            <form action="" method="post">
                <div class="col">
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" name="username" autocomplete="off" required>
                    <span>Username</span>
                </div>
                <div class="col">
                    <i class="fa-solid fa-lock icon"></i>
                    <i class="fa-solid fa-eye" id="toggle"></i>
                    <input type="password" name="password" id="password" required>
                    <span>Password</span>
                </div>

                <div class="forget">
                    <a href="">Forget Password?</a>
                </div>

                <div class="login">
                    <button name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>