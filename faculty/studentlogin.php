<?php
session_start();

 include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            margin: 0;
            padding: 0;
            background-color:#4b92ff;
            background: url("./leadspace.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            /* text-align: center; */
            margin-left: 23%;
            color: #0856cf;
            margin-top: 11rem;
            height: 20px;
        
        }

        form {
            max-width: 400px;
            /* margin: 20px auto; */
            /* background: #faaf6a; */
            padding: 20px;
            margin-left: 14%;
            border-radius: 5px;
            box-shadow: -10px 10px 10px rgba(0, 0, 0, 0.1);
            /* margin-top: 15rem; */
            /* margin-left: 70%; */
            background-image: linear-gradient(to bottom right, #ff6e7f,#bfe9ff);
            /* background-size: cover; */
            /* height: 250px; */

        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 17px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #0856cf;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: large;
            font-weight: bolder;
            /* margin-top: 15px; */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            /* background-color: #ea384d; */
        }
        .regi{
            margin-left: 10px;
        }
    </style>
</head>
<body>

<h2>Student Login</h2>

<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="password" required>

    <input type="submit" name="login" value="Login">
    <a  href="./sturegis.php">Register?</a>
</form>

</body>
</html>
<?php
// Check if form is submitted
if (isset($_POST['login'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
$userlogin=mysqli_query($conn,"Select * from studentdata where Stdname = '$username' and Password = '$password'" );
    // In a real scenario, validate the credentials against a database
    // Here, let's assume a simple check for demo purposes
    // $valid_username = '';
    // $valid_password = '';
echo mysqli_num_rows ($userlogin);
    if (mysqli_num_rows ($userlogin)>0) {
        $_SESSION['stdnam']=$username;
        // echo '<script>alert("$username")</script>';

        // For demonstration, assuming the login is successful
        // echo "Login successful! Welcome";
        echo '<script>window.location.href="studentdash.php"</script>';
    } else {
        echo '<script>alert("invalid password")</script>';
    }
}
?>
