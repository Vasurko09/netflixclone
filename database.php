<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "testing";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        
       
    }
    catch(mysqli_sql_exception){
        echo "not connected";
    }
?>

<?php

/*try{
    $dns = "mysql: id21160343_vasudb; host = localhost";
    $user = "id21160343_vasu";
    $password = "Vasuballi@09";
    
    $conn = new PDO($dns, $user, $password);
    $conn -> query("USE id21160343_vasudb");
}
catch(PDOException $e){
    die("error connecting: " . $e ->getMessage());
}
*/ 
?> 