<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

</head>
<body>
<div id="container">

    <div id="top">

        <div id="title">MARVEL SITE</div>

        <div id="menu">
            <a href="/">HOME</a>
            <a href="">ALL MOVIES</a>
            <a href="">MARVEL STUDIOS</a>
            <a href="">MOVIES AFTER 2010</a>
            <a href="">X-MEN</a>
        </div>

    </div>

    <div id="middle">

        <?php

        include(dbconnect.php);

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
        

        ?>

    </div>

</div>

</body>
</html>