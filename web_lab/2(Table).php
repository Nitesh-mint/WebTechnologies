<?php
    $con = mysqli_connect("localhost","root","","school");
    $query = "SELECT * FROM student";
    $result = mysqli_query($con,$query);
    echo "<table>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['FIrstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>