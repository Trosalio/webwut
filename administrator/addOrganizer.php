<?php
    include("./connectDB.php");

    $username = $_POST['userID'];
    $password = crypt($_POST['pwd'], '$webwut$');
    $con_password = $password;
    $org_name = $_POST['orgName'];
    $email = $_POST['email'];
    $mobile_no = $_POST['phone'];
    $role = 'OR';

    //check userID & email ไม่ซ้ำ
    $query_check = "SELECT * FROM `organizer_info` LEFT JOIN `user` ON organizer_info.userID = user.id 
        WHERE organizer_info.email='".$email."' AND user.userID='".$username."'";
    $statement_check = $conn->query($query_check);
    $row_check = $statement_check->fetchAll(PDO::FETCH_OBJ);
    if (sizeof($row_check) > 0) {
        echo " username or email has already !! ";
    } else {
        // userID และ email ไม่ซ้ำ
        $query1 = "INSERT INTO `user` (`userID`,`password`,`role`) 
        VALUES ('".$username."','".$password."','".$role."')";
        //insert username to DB
        $statement = $conn->exec($query1);
        echo " ---new Organizer--- ";
        $userID = $conn->lastInsertId();
        $query2 = "INSERT INTO `organizer_info` (`userID`,`orgName`,`email`,`phoneNo`) 
            VALUES ('$userID.','".$org_name."','".$email."','".$mobile_no."')";
        //insert info to DB
        $statement = $conn->exec($query2);
        echo " --create new organizer--";
    }
    


    
?>