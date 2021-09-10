<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-2</title>
</head>
<body>
<pre>
    <?php
        $a = "something";
        $b = "something";
        $i = 0;
        if ($a == $b ) {
       	    echo "$a is equal to $b \n";
        } else {
            echo "$a is not equal to $b \n";
        }

        switch ($i) {
            case 0:
                echo "i equals 0 \n";
                break;
            case 1:
                echo "i equals 1 \n";
                break;
            case 2:
                echo "i equals 2 \n";
                break;
            default:
                echo "i not found \n";
        }
    ?>
    </pre>
</body>
</html>
