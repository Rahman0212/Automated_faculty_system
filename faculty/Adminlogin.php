<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fc575e;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            /* color: #333; */
            color: #152862;
            margin-top: 10rem;
            font-size:xx-large
            /* margin-left: 23%; */
        }

        form {
            max-width: 300px;
            margin: 20px auto;
            /* background: linear-gradient(to bottom right, #1488cc,#2b32b2); */
            background: #e1cbd7;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* margin-top: 1rem; */
            /* margin-left: 50%; */
            /* background-color: #ffa751; */
            /* background-size: cover; */
            /* height: 200px; */

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
            /* margin-top: 10px; */
        }

        input[type="submit"] {
            background-color: #152862;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: large;
            font-weight: bolder;
            height: 35px;
            margin-top: 15px;

        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Admin Login</h2>

<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="password" required>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
<?php
// Check if form is submitted
if (isset($_POST['login'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
$userlogin=mysqli_query($conn,"Select * from adlogin where adminname = '$username' and password = '$password'" );
    // In a real scenario, validate the credentials against a database
    // Here, let's assume a simple check for demo purposes
    // $valid_username = '';
    // $valid_password = '';
echo mysqli_num_rows ($userlogin);
    if (mysqli_num_rows ($userlogin)>0) {
        // For demonstration, assuming the login is successful
        // echo "Login successful! Welcome";
        echo '<script>window.location.href="admindash.php"</script>';
    } else {
        echo "<script>alert('invalid password')</script>";
    }
}
?>
