<?php

    session_start();

    if(isset($_POST['emp_code'])){

        include('connect.php');

        $emp_code = $_POST['emp_code'];
        $emp_code = mysqli_real_escape_string($conn, $emp_code); 
        $password = $_POST['password'];
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM users WHERE emp_code = '$emp_code' AND password = '$password'";

        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) == 1){


            $row = mysqli_fetch_array($result);
            $empcode = $row['emp_code'];
            $add = "INSERT into userlogin(emp_code,ul_date_in)
                    Values ('$empcode',CURRENT_TIMESTAMP())";
            mysqli_query($conn,$add);

            $_SESSION['id'] = $row['id'];
            $_SESSION['userid'] = $row['emp_code'];
            $_SESSION['user'] = $row['emp_name'];
            $_SESSION['userlevel'] = $row['userlevel'] ;
            if($_SESSION['userlevel']=='Admin'){
                header("Location: homepages.php");
            }
            if($_SESSION['userlevel']=='User'){
                header("Location: homepages.php");
            }

        }else{
            echo "<script type='text/javascript'>";
            echo "alert('ID หรือ Password ไม่ถูกต้อง');";
            echo "window.location = 'index.html'; ";
            echo "</script>";
        }

    }else{
        header("Location: index.html");
    }


?>