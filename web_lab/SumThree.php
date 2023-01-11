<?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $sum = $num1+$num2+$num3;
        echo "$sum";
    }
?>
<form method="post" action="">
    <label>First number</label>
    <input type="text" name="num1">
    <label>Second number</label>
    <input type="text" name="num2">
    <label>Third number</label>
    <input type="text" name="num3">
    <input type="submit" name="submit">
</form>
