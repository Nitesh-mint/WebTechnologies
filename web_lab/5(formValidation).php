<?php
    if(isset($_POST["submit"])){
        $email = trim($_POST["email"]);
        $name = trim($_POST['name']);
        $number = trim($_POST['number']);

        //check if the input is empty
        if($email == "" && $name == "" && $number==""){
            $errorMsg = "Error: cannot be empty";
            $code = "1";
        }
        //check if the number field is numeric
        elseif(is_numeric($number) == false){
            $errorMsg = "Error: Please enter number";
            $code = "2";
        }
        //check the length of the number
        elseif(strlen($number) <10 || strlen($number)>10){
            $errorMsg = "Error: Please enter 10 numbers";
            $code = "2";
        }
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
            $errorMsg= 'error : You did not enter a valid email.';
            $code= "3";
          }
          else{
            echo "Success";
          }
    }
?>
<body>
    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>   
    <form method="post" action="">
        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="text" name="email">
        <label>Phone Number</label>
        <input type="text" name="number">
        <input type="submit" name="submit" value="confirm">
    </form>
</body>