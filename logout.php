<?php

    include 'connect.php';
    session_start();
    $empcode = $_SESSION['userid'];
    session_destroy();
    header("Location: index.html");
    
    $userlogout = "UPDATE userlogin SET ul_date_out=CURRENT_TIMESTAMP WHERE emp_code='$empcode' AND ul_date_in=(SELECT MAX(ul_date_in) FROM `userlogin` WHERE emp_code='$empcode' GROUP BY emp_code)";
    mysqli_query($conn, $userlogout);

    /* เทส คิวรี่ เวลา SELECT *,MAX(ul_date_in) FROM `userlogin` WHERE ul_date_in=(SELECT MAX(ul_date_in) FROM `userlogin` WHERE emp_code='AM1' GROUP BY emp_code)*/

?>

