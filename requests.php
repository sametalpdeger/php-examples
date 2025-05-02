<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];

        echo "<div style='background-color: yellow;'>$name</div>";

        switch ($name) {
            case "404":
                echo "ahaaaa ";
                break;
            case "notfound404":
                echo "ahaaaaaaa ";
                break;
        }

        if (strlen($name) > 20) {
            echo "Name is too long!";
            return;
        }
        
        echo "$name is a good name!";
    } else {
        if (isset($_GET)) {
           echo "Welcome!!";
        }
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost:3000/requests.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>