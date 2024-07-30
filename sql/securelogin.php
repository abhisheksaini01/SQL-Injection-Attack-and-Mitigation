

<?php
    if(isset($_POST['submit'])){
         include "connection.php";
         $username=$_POST['user'];
         $username=mysqli_real_escape_string($conn,$username);
          $password=$_POST['pass'];
    

    if(empty($username)) {
        echo '<script>
        alert("Username cannot be empty!");
        window.location.href="securelogin.php";
        </script>';
        exit();
    }
    
    // Example: Validate username format (you can adjust the regex pattern as needed)
    // if(!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
    //     echo '<script>
    //     alert("Invalid username format!");
    //     window.location.href="securelogin.php";
    //     </script>';
    //     exit();
    // }

    $sql = "select * from users where username = '$username'";

    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);

    
        if($row && ($password === $row["password"])){
            header("Location: welcome.php");
            exit();
        }
    else{
        
        echo '<script>
        alert("Invalid username or password!!");
        window.location.href="securelogin.php";
        </script>';
    }


}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
        <h2>Login</h2>
        <form method="post" action="securelogin.php">
            <div class="form-group">
                <label for="username">Enter Username:</label>
                <input type="text" id="user" name="user" required>
            </div>
            <div class="form-group">
                <label for="password">Enter Your Password:</label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <input type="submit" value="Login" name="submit"/>
        </form>
    </div>
</body>
</html>
