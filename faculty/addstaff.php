<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty</title>
    <link rel="stylesheet" href="addstaff.css"> <!-- Link your CSS file -->
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
    <h1>Staff List</h1>

    <div class="content">
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
    </tr>
    <?php
    $sql = "SELECT * FROM staffdata";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["Staff_Name"]."</td>
                    <td>".$row["Staff_Email"]."</td>
                    <td>".$row["Subject"]."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
    ?>
</table>

        <!-- <p>hello world</p> -->
        <!-- Display dynamic content using PHP -->
        <?php
        
        $conn->close();
        ?>
    </div>
</div>

</body>
</html>
