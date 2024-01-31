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
    background-color: #ffd35b;
    background-color: #ff0844;
    background-color: #ffd35b;

    /* color: #fff; */
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
    border: 1px solid #355070;
    text-align: left;
    padding: 8px;
    font-style: oblique;
    font-size: large;
    /* background-image:linear-gradient(to bottom right, #ff0844,#ffb199); */
    
}
th {
    border: 1px solid #dddddd;
    border: 1px solid #355070;
    text-align: left;
    padding: 8px;
    background-color: #f2f2f2;
    background-color: #ff0844;
    background-color: #ffd35b;


    
}
.ed{
    background-color: #0856cf;
            color: white;
            border: none;
            cursor: pointer;
            height: 30px;
            width: 70%;
            font-size: large;
            font-weight: bolder;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-left: 16%;
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
    <a href="./testanswer.php">Test Answer</a>
    <a href="./result.php">Result</a>
    <a href="./stdreview.php">Student Review</a>
    <a href="./index.php">LogOut</a>


</div>

<div class="main">
<a class="back" href="./staffdash.php "> >>Back</a>
    <h1>Test</h1>

    <div class="content">
        <table>
    <tr>
        <th>Subject</th>
        <th>Question1</th>
        <th>Question2</th>
        <th>Question3</th>
        <th>Question4</th>
        <th>Question5</th>
        <th>Edit Question</th>
    </tr>
    <?php
    $result="SELECT * from add_test";
    $sel=mysqli_query($GLOBALS['conn'],$result);
    while($row=mysqli_fetch_assoc($sel)){
        ?>
            <tr>
                    <td><?php echo $row["Subject"]?></td>
                    <td><?php echo $row["Question1"]?></td>
                    <td><?php echo $row["Question2"]?></td>
                    <td><?php echo $row["Question3"]?></td>
                    <td><?php echo $row["Question4"]?></td>
                    <td><?php echo $row["Question5"]?></td>
                     <form action="./createquestion.php" method="POST">
                    <td><button name="edit" class="ed" value="<?php echo $row["id"]?>">Edit</button></td>
                     </form>
                  </tr>
                  <?php
        }
       
    ?>
</table>
        <?php
        if(isset($_POST['edit'])){
            $edit=$_POST['edit'];
            // echo"<script>alert('$edit')</script>";
        }
        ?>
    </div>
</div>

</body>
</html>
