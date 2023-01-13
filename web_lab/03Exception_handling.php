<?php
function division($x, $y){
    if($y == 0){
        throw new Exception("Division by zero");
    }else{
        $z = $x / $y;
        echo "<p>$x / $y = $z</p>";
    }
}
try{
    division(10,2);
    division(30,-4);
    division(15,0);
    //if exception is thrown following line won't execute
    echo '<p>All divisions performed successfully.</p>';
} catch(Exception $e){
    //handle the exeption
    echo "<p>Caught exception: " .$e->getMessage() ."</p>";
}
//continue execution
echo "<p>Hello world!</p>";
?>