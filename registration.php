<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration Details</title>

    <!-- Custom fonts and styles -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('https://images.unsplash.com/photo-1690229689642-c85a2373e2ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registration Details</h1>
                            </div>

                            <!--PHP Code -->
                            <?php
                                require_once('connect.php');
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $firstName = $_POST["firstName"];
                                $lastName = $_POST["lastName"];
                                $email = $_POST["email"];
                                $birthdate = $_POST["birthdate"];
                                $gender = $_POST["gender"];
                                $address = $_POST["address"];
                                $contactNo = $_POST["contactNo"];
                                $username = $_POST["username"];
                                $password = $_POST["password"];
                                $confirmPassword = $_POST["confirmPassword"];

                                $query = "insert into user_tbl(firstname, lastname, email, birthdate, gender, address,contact, username, password, c_password, regs_date) values('$firstName', '$lastName', '$email', '$birthdate', '$gender', '$address', '$contactNo', '$username', '$password', '$confirmPass    word', NOW())";
                                $result = mysqli_query($conn, $query);

                                if($result){
                                    echo '<script> type = "text/Javascript';
                                    echo 'alert("Succesfully Registered!");';
                                    echo '</script>';

                                }else{
                                    $err[] = 'Registration Failed...'.mysqli_error($conn);
                                }
                                mysqli_close($conn);

                                // Display the registration details
                                echo "<p><strong>First Name:</strong> $firstName</p>";
                                echo "<p><strong>Last Name:</strong> $lastName</p>";
                                echo "<p><strong>Email:</strong> $email</p>";
                                echo "<p><strong>Date of Birth:</strong> $birthdate</p>";
                                echo "<p><strong>Gender:</strong> $gender</p>";
                                echo "<p><strong>Address:</strong> $address</p>";
                                echo "<p><strong>Contact No:</strong> $contactNo</p>";
                                echo "<p><strong>Username:</strong> $username</p>";
                            } else {
                                echo "<p>Invalid request method.</p>";
                                die('Connection Failed').mysqli_connect_error();
                            }
                            ?>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="register.html">Back to Registration Form</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
