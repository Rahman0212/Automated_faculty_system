<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty</title>
    <!-- <link rel="stylesheet" href="style.css">  -->
    <style>
        /* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
}

.sidenav {
    height: 100vh;
    width: 250px;
    /* background-color: #333; */
    /* background-color: #ffb199; */
    background-image:linear-gradient(to bottom right, #ff0844,#ffb199);
    color: #fff;
    padding-top: 20px;
}

.sidenav h2 {
    text-align: center;
}

.sidenav a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 20px;
    color: #fff;
    color: #125b50;
    color: #152862;
    display: block;
}

.sidenav a:hover {
    background-color: #A5747A;
    color: #fff;
}

.main {
    flex: 1;
    padding: 20px;
}
.main h1{
    background: linear-gradient(to right, #330867 0%, #330867 100%);
    background-clip: text;
    color: transparent;
}
.content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
}
table {
    border-collapse: collapse;
    width: 50%;
}
td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    /* background-image:linear-gradient(to bottom right, #ff0844,#ffb199); */
    
}
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    /* background-color: #f2f2f2; */
    background-color: #ff0844;    
}
.fire{
    border: none;
    font-style: oblique;
    font-size: large;
}
input[type=submit]{
    cursor: pointer;
    background-color: #04AA6D;
    color: white;
    border: none;
    text-decoration: none;
    height: 30px;
    width: 100%;
    margin-top: -10px;
    font-size: large;
    font-weight: bolder;
    border: 1px solid #ccc;
    border-radius: 3px;
    /* margin-left: 16%; */
}
.back{
    border: none;
    background: transparent;
    font-size: xx-large;
    margin-left: 85%;
    /* color: #fff; */
}
.fail{
    border: 1px solid green;
    width: 140px;

}
    </style>
</head>
<body>

<div class="sidenav">
    <h2>Dashboard</h2>
    <a href="./addstaff.php">Staff List</a>
    <a href="./addstu.php">Student List</a>
    <a href="./test.php">Test Add</a>
    <a href="./result.php">Result</a>
    <a href="./stdreview.php">Student Review</a>
    <a href="./index.php">LogOut</a>


</div>

<div class="main">
<a class="back" href="./staffdash.php "> >>Back</a>

    <h1>Staff Result</h1>

    <div class="content">
<table>
    <tr>
        <th>Name</th>
        <th>Subject</th>
        <th>Result</th>
        <th>Submit</th>

    </tr>
    <?php
    $sql = "SELECT * FROM staffdata";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            ?> 
            <form action="" method="POST">
            <tr>
            
            <td><input type="text" class="fire" name='stfnam' value="<?php echo $row["Staff_Name"]?>"></td>
            <td><input type="text" class="fire" name='stfsubject' value='<?php echo $row["Subject"]?>'></td>
                    <td><input type="text" class="fail" name="pass" value="" id=""></td>
                    <td><input type="submit" name="res" value="Submit"></td>
                    <!-- <td><button name="res">submit</button></td> -->
                     
                     
                  </tr>
                  </form>
                  <?php
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
    ?>
</table>
        <?php
        if (isset($_POST['res'])) {
            // Retrieve form data
            $staffname = $_POST['stfnam'];
            $subject = $_POST['stfsubject'];
            $pass = $_POST['pass'];
            $sql = "INSERT INTO result(Staff_Name,Subject,Result) VALUES ('$staffname', '$subject','$pass')";

    if ($conn->query($sql) === TRUE) {
        // echo "<script>alert('$subject');</script>";
        echo "<script>alert('Result Inserted');</script>";
        // echo '<script>window.location.href="stafflogin.php"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
        ?>
    </div>
</div>

</body>
</html>
