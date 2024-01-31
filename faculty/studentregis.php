<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facultydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM staffdata";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Table</title>
    <style>
        table {
            border-collapse: collapse;
            /* width: 60%; */
            display: flex;
            justify-content: center;
            

        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 20px;
        }
        th {
            background-color: #f2f2f2;
            
        }
    </style>
</head>
<body>

<h2>User Table</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
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

<?php
// Close the connection
$conn->close();
?>

</body>
</html>
