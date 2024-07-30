<?php
 if(isset($_POST['submit'])){
    include "connection.php";
    $username=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];

    $sql="select * from users where username='$username' ";
    $result=mysqli_query($conn,$sql);
    $count_user=mysqli_num_rows($result);

    $sql="select * from users where username='$email' ";
    $result=mysqli_query($conn,$sql);
    $count_email=mysqli_num_rows($result);

    if($count_user==0 && $count_email==0){
        if($password==$cpassword){
            // $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql="insert into users(username,email,password) values('$username','$email','$password')";
            $result=mysqli_query($conn,$sql);

            if($result){
                // Registration successful message
                $message = "Registration successful! You can now <a href='login.php'>login</a>.";
                echo "<script>
                    setTimeout(function(){
                        alert('$message');
                    }, 2000); // 2 seconds
                </script>";
            } else {
                $message = "Error: Registration failed. Please try again.";
            }
        }
        else{

            echo '<script>
            alert("password do not match!!!");
            window.location.href="signup.php";
            </script>';
        }

    }
    else{
        echo '<script>
        alert("user already exists !!!");
        window.location.href="index.php";
        </script>';
    }

 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
      include "navbar.php";
    ?>
    <div class="container">
        <h2>Signup Form</h2>
        <form method="post" action="signup.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="user" name="user" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="form-group">
                <label for="retype_password">Retype Password:</label>
                <input type="password" id="cpass" name="cpass" required>
            </div>
            <input type="submit" value="Signup" name="submit"/>
            <br>
            <span>Already have an account? <a href="login.php">Login here</a></span>
        </form>
    </div>
</body>
</html>
