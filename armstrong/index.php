<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Numbers</title>
</head>
<body>
<pre>
    <?php
    function get_digit($i) {
        $k = 0;
       
        while ( intval($i) > 0) {
            $i = $i / 10;
            $k++;
        }
        return $k;
    }
    for ($i=0; $i < 1000; $i++) { 
        $j = get_digit($i);
        $k = $i;
        $total = 0;
        while( $k> 0) {
            $digit = $k % 10;
            $k = intval($k / 10);
            $total+= pow($digit,$j);
        }
        if ($total == $i) {
            echo "$i  is an armstrong Number\n";
        }
    }

    ?>
</pre>
</body>
</html>