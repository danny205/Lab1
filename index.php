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

    $sql = "SELECT title FROM marvelmovies  WHERE yearReleased '2003'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "title: " . $row["title"]. ",";
            echo "</br>";
        }

    } else {
        echo "0 results";
    }
    $conn->close();

    ?>
</p>

</body>
</html>