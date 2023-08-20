<!DOCTYPE html>

<?php
    include("database.php"); 
    

 /*   $sql = "INSERT INTO testing(user,password)VALUES('rko' , 'test2')"; 
    try{
        mysqli_query($conn,$sql);
        echo"user created";
    }
    catch(mysqli_sql_exception){
        echo "something went wrong";
    } 
    $sql = "SELECT * FROM testing WHERE user = 'vasu' ";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["uuid"()] . "<br>";
    } */
    
   
?>
<?php
   include("netfllx_login.html"); 
?>



<?php
     if($_SERVER["REQUEST_METHOD"]=='POST'){
        $user = $_POST["user"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM testing WHERE username = '$user' ";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            $rows = mysqli_fetch_assoc($result);
            if ($rows["username"] == $user && $rows["password"] == $password){
                header("location: netflix.html");
            }
        }


    }
?>

<?php 
    mysqli_close($conn)
?>