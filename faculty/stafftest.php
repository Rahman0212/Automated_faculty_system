
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
    <!-- <link rel="stylesheet" href="staff.css">  -->
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

.main {
    flex: 1;
    padding: 20px;
    /* background: url(./main-qimg-8a6bca6f581c59d79c6d20afcd4e64d4.webp);
    background-repeat: no-repeat;
    background-size: cover; */
}

.content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
}
label{
    font-size: larger;
    font-weight: bold;
    margin-top: 20px;
}
input[type=text] {
  width: 350px;
  margin-top: 20px;
  margin-bottom: 10px;
  padding: 12px;
  border: 1px solid #ccc;
  font-size: large;
  border: 2px solid #1d976c;
  /* border-radius: 4px; */
  /* border: none; */
  /* resize: vertical; */
}
input[type=text]:hover{
    /* width: 100%; */
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 270px;
  margin-top: 15px;
  width: 100px;
  /* float: right; */
}
.back{
    border: none;
    background: transparent;
    font-size: xx-large;
    margin-left: 85%;
    /* color: #fff; */
}
.txt{
    margin-top: 10px;
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
    <h1>Staff Test</h1>

    <div class="content">
    <?php
    $result="SELECT * from add_test where Subject='$vikram'";
    $sel=mysqli_query($GLOBALS['conn'],$result);
    while($row=mysqli_fetch_assoc($sel)){
        ?>
           <div>
    <form action="" method="POST" >
            <label for="">Subject</label><br>
            <input type="text" name="subject" value="<?php echo $row["Subject"]?>"readonly><br>
            
            <label for=""><?php echo $row["Question1"]?></label></br>
            <textarea class='txt' name='Anwser1'style="width: 350px;height: 10px;
                 padding: 10px; border:3px dashed #1d976c;
                 background-color:aliceblue;"></textarea></br>
            <input type="text" name="Answer1"><br>

            <label for=""><?php echo $row["Question2"]?></label></br>
            <textarea class='txt' name='Anwser2'style="width: 350px;height: 10px;
                 padding: 10px; border:3px dashed #1d976c;
                 background-color:aliceblue;"></textarea></br>
                    <label for=""><?php echo $row["Question3"]?></label></br>
                    <textarea class='txt' name='Anwser3'style="width: 350px;height: 10px;
                 padding: 10px; border:3px dashed #1d976c;
                 background-color:aliceblue;"></textarea></br>
                    <label for=""><?php echo $row["Question4"]?></label></br>
                    <textarea class='txt' name='Anwser4'style="width: 350px;height: 10px;
                 padding: 10px; border:3px dashed #1d976c;
                 background-color:aliceblue;"></textarea></br>
            <label for=""><?php echo $row["Question5"]?></label></br>
            <textarea class='txt' name='Anwser5'style="width: 350px;height: 10px;
                 padding: 10px; border:3px dashed #1d976c;
                 background-color:aliceblue;"></textarea></br>
                    <button type="submit" name="stfans">submit</button>
    </form>
           </div>
                    
                    
                
                  <?php
        }
       
    ?>

        <?php
        if(isset($_POST['stfans'])){
            // $username = $_POST['username'];
     $subject=$_POST['subject'];
    $answer1 = $_POST['Answer1'];
    $answer2 = $_POST['Answer2'];
    $answer3 = $_POST['Answer3'];
    $answer4 = $_POST['Answer4'];
    $answer5 = $_POST['Answer5'];
    echo "<script>alert('$answer1')</script>";
   
    

    // You can perform further validation here before storing data in a database
    // For example, check if username or email already exists in the database, etc.


    // SQL query to insert data into the database
    $sql = "INSERT INTO staffanswer(Subject,Answer1,Answer2,Answer3,Answer4,Answer5) VALUES (' $subject','$answer1', '$answer2','$answer3','$answer4','$answer5')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Confirmed');</script>";
        // echo '<script>window.location.href="stafflogin.php"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
            // echo"<script>alert('$edit')</script>";
        
        // <?php
        // Example: Displaying current date and time
        // echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
        ?>
    </div>
</div>

</body>
</html>
