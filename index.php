<!DOCTYPE html>
<html>
<head></head>
<body>

<p>
    <?php

    $con = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b42d75f25c6292","43152099","dannydb");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
        echo "working";
    }

    $sql_query = "SELECT * FROM superheros  WHERE superpower LIKE '%l aser%' ";
    $result = $db->query($sql_query);

    while($row = $result->fetch_array()){
        echo "<p>" . $row['superheroName' ] . "</p>";
    }

    $result->close();

    ?>
</p>

</body>
</html>