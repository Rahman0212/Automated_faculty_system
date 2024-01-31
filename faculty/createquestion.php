<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
input[type=text]{
    border: none;
  border-bottom: 2px solid red;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  cursor: pointer;
    background-color: #04AA6D;
    color: white;
    border: none;
    text-decoration: none;
    height: 30px;
    width: 70%;
    margin-top: -10px;
    font-size: large;
    font-weight: bolder;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-left: 16%;
}

button:hover {
  background-color: #45a049;
}
form{
    margin-left: 10%;
    margin-top: 5%;
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
    <a href="./admindash.php">Back</a>
    <a href="./index.php">LogOut</a>
</div>
    <?php
    if (isset($_POST['edit'])){
        $id=$_POST['edit'];
        $result="SELECT * from add_test where id = '$id'";
        $sel=mysqli_query($GLOBALS['conn'],$result);
        while($row=mysqli_fetch_assoc($sel)){
            ?>
            
            <form action="" method="post">
        <label for="">subject</label>
        <input type="text" name="subject" value='<?php echo $row['Subject']?>' id=""><br>
        <label for="">Question:1</label>
        <input type="text" name="question1" value='<?php echo $row['Question1']?>' id=""><br>
        <label for="">Question:2</label>
        <input type="text" name="question2" value='<?php echo $row['Question2']?>' id=""><br>
        <label for="">Question:3</label>
        <input type="text" name="question3" value='<?php echo $row['Question3']?>' id=""><br>
        <label for="">Question:4</label>
        <input type="text" name="question4" value='<?php echo $row['Question4']?>' id=""><br>
        <label for="">Question:5</label>
        <input type="text" name="question5" value='<?php echo $row['Question5']?>' id=""><br>
        <button type="submit" name="Test" value="<?php echo $row['id']?>" >Submit</button>
    </form>
    <?php
        }
    }
    ?>
    
    <?php
    if (isset($_POST['Test'])) {
        // Retrieve form data
        $submit_id=$_POST['Test'];
        $subject = $_POST['subject'];
        $question1 = $_POST['question1'];
        $question2 = $_POST['question2'];
        $question3 = $_POST['question3'];
        $question4 = $_POST['question4'];
        $question5 = $_POST['question5'];
        // $password = $_POST['password'];
        $sql = "UPDATE add_test SET Subject='$subject',Question1='$question1',Question2='$question2',Question3='$question3',Question4='$question4',Question5='$question5' where id='$submit_id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Test Added');</script>";
            echo '<script>window.location.href="test.php"</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    ?>
</body>
</html>
