<?php
$con = mysqli_connect("localhost","root","","school");
mysqli_select_db($con, "school");
$sql = "SELECT * FROM student WHERE id=1";
//execute the query 
$result = mysqli_query($con, $sql);
//fetch the results
$row =  mysqli_fetch_assoc($result);

echo "<form>";
echo "<label for='name'>First Name: </label><br>";
echo '<input type="text" id="name" name="FirstName" value="'.$row['FIrstName'].'"><br>';
echo '<input type="text" id="lastname" name="LastName" value="'.$row['LastName'].'"><br>';
?>