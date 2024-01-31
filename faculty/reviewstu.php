<?php
session_start();
// echo "stdname ".$_SESSION['stdnam'];
include('db.php');
$rahi="";
$vikram="";
if(isset($_SESSION['stdnam'])){
    $rahi=$_SESSION['stdnam'];

}
$result="SELECT * from studentdata where Stdname = '$rahi'";
$sel=mysqli_query($GLOBALS['conn'],$result);
while($row=mysqli_fetch_assoc($sel)){
$vikram=$row['Class'];

} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard with Side Navigation</title>
    <!-- <link rel="stylesheet" href="student1.css"> Link your CSS file -->
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
    /* background-color: #072E33; */
    background-image:linear-gradient(to bottom right, #1488cc,#2b32b2);
    
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
    color: #fafafa;
    display: block;
    /* background-color: rgb(154, 206, 71); */
    /* background-color: #0F9690; */
}

.sidenav a:hover {
    background-image:linear-gradient(to bottom right, #fee140,#fa709a);
    
}

.main {
    flex: 1;
    padding: 20px;
}

.content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
}
.txt{
    border: 2px solid ;
    /* border-radius: 5px; */
    height: 10rem;
    width: 50%;
    /* background-color: wheat; */
}
input[type=text] {
  /* width: 100%; */
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  font-style:oblique;
  font-size: medium;
}
input[type=radio]{
    border: 1px solid black;
}
.sub{
    margin-top: 1rem;
    background-color: rgb(101, 101, 174);
    width:20%;
    height: 30px;
    border: none;
    cursor: pointer;
}
.back{
    border: none;
    background: transparent;
    font-size: xx-large;
    margin-left: 85%;
    /* color: #fff; */
}   
label{
    font-weight: bolder;
    /* margin-top: 50px; */
}
    </style>
</head>
<body>

<div class="sidenav">
    <h2>Dashboard</h2>
    <a href="./reviewstu.php">Review</a>
    <a href="./index.php">LogOut</a>


</div>

<div class="main">
<a class="back" href="./staffdash.php "> >>Back</a>
    <h1>Feedback</h1>
    <?php
    $result="SELECT * from studentdata where Stdname='$rahi'";
    $sel=mysqli_query($GLOBALS['conn'],$result);
    while($row=mysqli_fetch_assoc($sel)){
        ?>
    <div class="content">
        <form action="" method="post">
        <label name=''>Student Name:</label>
        <input type="text" name="stdname" value="<?php echo $row['Stdname']?>" id="" readonly ></br>
        <label for="">Subject Name:</label>
        <input type="text" name="subject" value="<?php echo $row['Class']?>" id="" readonly ></br>
        <label for="">Write Your Feedback:-</label><br>
        <textarea class='txt' name='feed'style="width: 350px;height: 200px;
                 padding: 10px; border:3px dashed indigo;
                 background-color:aliceblue;"></textarea></br>
        <label for="">Ratings:</label>
        <input type="radio" name="rating" id="" value="1star">1star
        <input type="radio" name="rating" id="" value="2star">2star
        <input type="radio" name="rating" id="" value="3star">3star
        <input type="radio" name="rating" id="" value="4star">4star
        <input type="radio" name="rating" id="" value="5star">5star
        <br>
        <button type='submit' class='sub' name='feedback'> submit </button>
        </form>
        <!-- Display dynamic content using PHP -->
        <?php
    }    
    ?>

    <?php
        if (isset($_POST['feedback'])) {
            // Retrieve form data
            $studentname=$_POST['stdname'];
            $subject =$_POST['subject'];
            $feedback = $_POST['feed'];
            $ratings=$_POST['rating'];
            // You can perform further validation here before storing data in a database
            // For example, check if username or email already exists in the database, etc.
        
        
            // SQL query to insert data into the database
            $sql = "INSERT INTO studentreview(Stud_name,Sub_Teacher,Review,Rating) VALUES ('$studentname','$subject','$feedback','$ratings')";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Review Successfull');</script>";
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
