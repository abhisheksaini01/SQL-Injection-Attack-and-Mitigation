
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
