<?php

    include 'config/conn.php';

     // get the values from the form
        $loginBTN = $_POST['loginBTN'] ?? null;
        $reg_no = $_POST['reg_no'] ?? null;
        $password = $_POST['password'] ?? null;

        
    // check if the login button is clicked
    if(isset($loginBTN)){

        // check if the fields are empty
        if(empty($reg_no) || empty($password)){
            header("Location: login.php?msg=empty");
        }
        // check if input is not valid
        $reg_no_pattern = !preg_match("/^[A-Za-z]{2}\d{2}\/[A-Za-z]{4}\/\d{4}$/", $reg_no);
        $password_pattern = !preg_match("/^\d{4}$/", $password);
        if($reg_no_pattern || $password_pattern){
            header("Location: login.php?msg=invalidinput");
        }
        elseif(($reg_no_pattern == true) && ($password_pattern == true)){
            // prepare and execute the SQL statement
            $stmt = $conn->prepare("SELECT id, reg_no, password FROM students WHERE reg_no= ? AND password = ?");
            if($stmt === false){
                header("Location: login.php?msg=sqlerror");
                exit();
            }
            $stmt->bindParam(':reg_no', $reg_no);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // fetch the user data
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$user){
                // invalid credentials
                header("Location: login.php?msg=invalidcredentials");
                
            }
        }
        else{
            header("Location: instruction.php");
        }
        
        
    }
    else{
        echo"Button not clicked";
        exit();
    }









?>