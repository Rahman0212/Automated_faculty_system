<?php
session_start();

?>
<?php include('db.php') ?>
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
            background: url("./blank-paper-sheet-colorful-papers-backdrop_23-2147840281.avif");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            /* text-align: center; */
            margin-left: 44%;
            color: #0856cf;
            margin-top: 15rem;
            height: 20px;
        
        }

        form {
            max-width: 400px;
            /* margin: 20px auto; */
            /* background: #faaf6a; */
            padding: 20px;
            margin-left: 34%;
            /* border-radius: 5px; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* margin-top: 15rem; */
            /* margin-left: 70%; */
            /* background-image: linear-gradient(to bottom right, #b79891,#94716b); */
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
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            background-color: #faaf6a;
        }
        .regi{
            margin-left: 10px;
        }
    </style>
</head>
<body>

<h2>Staff Login</h2>

<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="password" required>

    <input type="submit" name="login" value="Login">
    <a  href="./staffregis.php">Register?</a>
</form>

</body>
</html>
<?php
$password="";
// Check if form is submitted
if (isset($_POST['login'])) {
    // echo '<script>alert("welcome")</script>';
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
$userlogin=mysqli_query($conn,"Select * from staffdata where Staff_Name = '$username' and Password = '$password'" );
    // In a real scenario, validate the credentials against a database
    // Here, let's assume a simple check for demo purposes
    // $valid_username = '';
    // $valid_password = '';
echo mysqli_num_rows ($userlogin);
    if (mysqli_num_rows ($userlogin)>0) {
        $_SESSION['sub']=$username;
        echo '<script>window.location.href="staffdash.php"</script>';
    } else {
        echo "<script>alert('invalid password')</script>";
    }
}
?>

