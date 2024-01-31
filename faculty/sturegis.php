<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url("./FacultyBanner-Mobile.png");
            background-repeat:no-repeat;
            background-size: cover;
        }

        h2 {
            /* text-align: center; */
            /* color: #333; */
            margin-left: 27%;
            margin-top: 80px;
            background-image: linear-gradient(to bottom right, #0cbaba,#380036);
            background-clip:text;
            -webkit-background-clip: text;
            color: transparent;
        }

        form {
            max-width: 400px;
            /* margin: 20px auto; */
            /* background: #fff; */
            background-image:linear-gradient(to bottom right, #0cbaba,#380036);
            padding: 20px;
            margin-left: 20%;
            margin-top: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="phone"],
        input[type="submit"] {
            width: calc(100% - 17px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .drop{
            width: calc(100% - 2px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Student Registration</h2>

<form method="post" action="">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="class">Class</label><br>
    <select class="drop" name="class" id="">
        <option value="">---Choose your Class---</option>
        <option value="Commerce">B.Com</option>
        <option value="Business Administration">BBA</option>
        <option value="Computer Application">BCA</option>
        <option value="Chemistry">B.Sc Chemistry</option>
        <option value="English">B.A English</option>
    </select>
    <!-- <input type="text" id="class" name="class" required><br><br> -->

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>
<?php




// Check if form is submitted
if (isset($_POST['register'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $password = $_POST['password'];
    

    // You can perform further validation here before storing data in a database
    // For example, check if username or email already exists in the database, etc.


    // SQL query to insert data into the database
    $sql = "INSERT INTO studentdata(Stdname,Stdemail,Class,Password) VALUES ('$username', '$email','$class','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Confirmed');</script>";
        echo '<script>window.location.href="studentlogin.php"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
