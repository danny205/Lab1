<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
<div id="container">

    <div id="top">

        <div id="title">MARVEL SITE</div>

        <div id="menu">
            <a href="/">HOME</a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>

    </div>

    <div id="middle">

        <?php

        $con = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b42d75f25c6292","43152099","dannydb");

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{
            echo "working";
        }

        $sql = "SELECT title FROM marvelmovies ";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "title: " . $row["title"]. ",";
                echo "</br>";
            }

        } else {
            echo "0 results";
        }
        $con->close();

        ?>

    </div>

</div>

</body>
</html>