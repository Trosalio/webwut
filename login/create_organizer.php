<?php
    include("./connectDB.php");

    $username = $_POST['reg_username'];
    $password = crypt($_POST['reg_password'], '$webwut$');
    $con_password = crypt($_POST['reg_password_confirm'], '$webwut$');
    $org_name = $_POST['reg_fullname'];
    $email = $_POST['reg_email'];
    $mobile_no = $_POST['reg_mobile_no'];
    $role = 'OR';

    //sql check userID & email ไม่ซ้ำ
    $query_check = "SELECT * FROM `organizer_info` LEFT JOIN `user` ON organizer_info.userID = user.id 
        WHERE organizer_info.email='".$email."' AND user.userID='".$username."'";
    $statement_check = $conn->query($query_check);
    $row_check = $statement_check->fetchAll(PDO::FETCH_OBJ);
    
    //empty filled
    if ($username != "" && $password != "" && $con_password != "" && $org_name != "" && $email != "" && $mobile_no != "") {
        if (sizeof($row_check) > 0) {
            echo " username or email has already !! ";
        } else {
            //check confirm password
            if ($password != $con_password) {
                echo "The confirm password does not match password";
            } else {
                // userID และ email ไม่ซ้ำ
                $query1 = "INSERT INTO `user` (`userID`,`password`,`role`) 
                    VALUES ('".$username."','".$password."','".$role."')";
                //insert USERNAME to DB
                $statement = $conn->exec($query1);
                $userID = $conn->lastInsertId();
                $query2 = "INSERT INTO `organizer_info` (`userID`,`orgName`,`email`,`phoneNo`) 
                    VALUES ('$userID.','".$org_name."','".$email."','".$mobile_no."')";
                //insert INFO to DB
                $statement = $conn->exec($query2);
                echo " --create new organizer--";
                }
        }
    } else {
        echo "Please fill data !!";
    }
    
    
    


    
?>