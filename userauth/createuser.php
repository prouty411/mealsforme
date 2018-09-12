<?php
    include_once 'mysqlconnect.php';
    $output['success']=0;
//security measure to make sure the submit button was clicked
    if(isset($_POST)){
        print_r($_POST);
        //obtain the information that was sent
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        //make sure everything was filled out
        if(empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($password)){
            //will pass along an error message if a field is empty
            $output['message'] = 'Fill in all fields.';
            exit();
        }else{
            //checking if the name is valid if so return user to signup with error message
            if (!preg_match("/^[a-zA-Z]*$/",$firstName) || !preg_match("/^[a-zA-Z]*$/",$lastName)){
                $output['message'] = 'invalid name.';
                exit();
            }else{
                //checking if email is valid if so return user to signup with error message invalid email
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                   $output['message'] = 'invalid email.';
                    exit();
                }else{
                    //checking if username is taken if it does return user to signup page with error username taken and
                    //checking if email is unique
                    $query = "SELECT * FROM `users` WHERE `user_username`='$username' OR `user_email`='$email'";
                    $result = mysqli_query($conn, $query);
                    $queryResult = mysqli_num_rows($result);
                    if($queryResult > 0){
                       $output['message'] = 'username or email is taken.';
                       $output['success']='false';
                    print_r($output);

                        exit();
                    }else{
                        //encrypt password then insert user into database
                        $hidePassword = password_hash($password, PASSWORD_BCRYPT);
                        $query = "INSERT INTO `users` (`user_firstname`,`user_lastname`,`user_username`,`user_email`,`user_password`) VALUES ('$firstName','$lastName','$username','$email','$hidePassword');";
                        $result = mysqli_query($conn , $query);
                        $output['message'] = 'user has been created.';
                        $output['success']=1;
                    }
                }
            }
        }

     }
?>