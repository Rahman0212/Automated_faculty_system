<!DOCTYPE html>
<html>
<head>
    <title>Faculty</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url("./main.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        form {
            max-width: 364px;
            margin: 20px auto;   
            background: #fff;
            padding: 40px;
            border-radius: 5px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            margin-top: 12.5rem;
            margin-left: 35.6%;
            /* background-color: #033431; */
            background-image:linear-gradient(to bottom right, #ffe259,#ffa751);
            /* background-size: cover; */
            height: 186px;
        }
        input[type="submit"] {
            /* background-color: #4caf50; */
            background-image:linear-gradient(to bottom right, #ff0844,#2b32b2);
            color: white;
            border: none;
            margin-top: 15px;
            height: 40px;
            cursor: pointer;
            width: 100%;
            font-weight: bolder;
            font-size: larger;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <input type="submit" name="admin" value="Admin">
    <input type="submit" name="staff" value="Staff">
    <input type="submit" name="student" value="Student">
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['admin'])) {
        header("Location: adminlogin.php");
        exit;
    } elseif (isset($_POST['staff'])) {
        header("Location: stafflogin.php");
        exit;
    } elseif (isset($_POST['student'])) {
        header("Location: studentlogin.php");
        exit;
    }
}
?>
