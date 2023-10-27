<?php
    require_once('connect.php');

    if (isset($_POST['submit'])) {
        if($conn){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthdate'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $c_password = $_POST['c_password'];

            $query = "INSERT INTO user_tbl (firstname, lastname, email, birthdate, gender, address, contact, username, password, c_password, regs_date)
            VALUES ('$firstname', '$lastname', '$email', '$birthdate', '$gender', '$address', '$contact', '$username', '$password', '$c_password', NOW())";

            $result = mysqli_query($conn, $query);

            if($result){
                header("Location: admin_dashboard.php");
                exit(); 
            }else{
                $err[] = 'Registration Failed...'.mysqli_error( $conn );

            }   
            mysqli_close($conn);
        }else{
            die('Connection Failed: '.mysqli_connect_error());
        }         
        }
    ?>