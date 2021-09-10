<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/testing/get.php",>
    <input type="text" name="name" id="">
    <input type="submit" value="Submits">
    <?php
        $name = $_GET['name'];
        echo "$name";
    ?>
    </form>
</body>
</html>