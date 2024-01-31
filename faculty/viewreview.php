<?php
session_start();

include('db.php');
$rahi="";
$vikram="";
if(isset($_SESSION['sub'])){
    $rahi=$_SESSION['sub'];

}
$result="SELECT * from staffdata where Staff_Name = '$rahi'";
$sel=mysqli_query($GLOBALS['conn'],$result);
while($row=mysqli_fetch_assoc($sel)){
$vikram=$row['Subject'];

}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard with Side Navigation</title>
    <!-- <link rel="stylesheet" href="staff.css"> Link your CSS file -->
    <style>
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
    background-image:linear-gradient(to bottom right, #1d976c,#93f9b9);
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
    /* color: #fff; */
    color: #FFA586;
    display: block;
}

.sidenav a:hover {
    /* background-color: #555; */
    /* background-color: #F39F5A; */
    background-color: #2B124C;
}
h1{
    /* color: #fff; */
    /* margin-left: 77%; */
    /* margin-top: 10%; */
}
.main {
    flex: 1;
    padding: 20px;
    /* background: url(./main-qimg-8a6bca6f581c59d79c6d20afcd4e64d4.webp);
    background-repeat: no-repeat;
    background-size: cover; */
}

.content {
    background-color: #fff;
    /* padding: 20px; */
    border-radius: 8px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
}
table {
    border-collapse: collapse;
    width: 100%;
}
td {
    border: 1px solid #dddddd;
    border: 1px solid #355070;

    text-align: left;
    padding: 8px;
    /* background-image:linear-gradient(to bottom right, #ff0844,#ffb199); */
    
}
th {
    border: 1px solid #dddddd;
    border: 1px solid #355070;
    text-align: left;
    padding: 8px;
    background-color: #ffb199;
    background-color: #ff0844;
    background-color: #ffb199;  
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
    <a href="./stafftest.php">Test</a>
    <a href="./staffresult.php">Result</a>
    <a href="./viewreview.php">Student Review</a>
    <a href="./index.php">LogOut</a>

    <!-- <a href="#">Result</a>
    <a href="#">Student Review</a> -->

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
    $sql = "SELECT * FROM studentreview where Sub_Teacher='$vikram'";
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
        ?>
    </div>
</div>

</body>
</html>
