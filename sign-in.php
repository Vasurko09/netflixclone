<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login Page </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav>
        <a href="#"><img src="images/logo.svg" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="sign-in.php" method="post">
                <div class="form-control">
            
                <input type="text" name="user" required>
                <label>username</label>
            </div>
            <div class="form-control">
                <input type="email" name="mail" required>
                <label>Email</label>
            </div>
            <div class="form-control">
                <input type="password" name = "password" required>
                <label>Password</label>
            </div>
            <button type="submit" name = "btn">Sign In</button>
            
        </form>
       
    </div>
</body>
</html>

<?php
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "testing";

        try{
            $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
            echo "connected";
        
        }
        catch(mysqli_sql_exception){
            echo "not connected";
        }
        $username = $_POST["user"];
        $mail = $_POST["mail"];
        $password = $_POST["password"];
        $sql = "INSERT INTO testing(username,mail,password)VALUES('$username', '$mail', '$password')";
        try{
            mysqli_query($conn,$sql);
           // header("location:index.php");
            echo "<script >window.location.href='index.php'</script>";
            
        }
        catch(mysqli_sql_exception){
            echo "something went wrong";
        } 
        mysqli_close($conn);
    }
    





?>

<?php 
    
?>