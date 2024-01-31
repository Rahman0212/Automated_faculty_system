<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
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
    font-size: 18px;
    color: #fff;
    color: #125b50;
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
    width: 100%;
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
    background-color: #f2f2f2;
    background-color: #ff0844;
}
.back{
    border: none;
    background: transparent;
    font-size: xx-large;
    margin-left: 85%;
    /* color: #fff; */
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

    <h1>Student Review</h1>

    <div class="content">
    <table>
    <tr>
        <th>Student Name</th>
        <th>Subject Teacher</th>
        <th>Student Review</th>
        <th>Student Rating</th>

    </tr>
    <?php
    $sql = "SELECT * FROM studentreview";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["Stud_name"]."</td>
                    <td>".$row["Sub_Teacher"]."</td>
                    <td>".$row["Review"]."</td>
                    <td>".$row["Rating"]."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
    ?>
</table>
        <?php
        // Example: Displaying current date and time
        // echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
        ?>
    </div>
</div>

</body>
</html>
