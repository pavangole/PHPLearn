<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-3</title>
</head>
<body>
<pre>
    <?php
        $i = 1;
        echo "\nStarting While Loop \n";
        $output=null;
        $retval=null;
        exec('ls -a ', $output, $retval);
        while ($i <= 10) {
            echo $i++,"\n" ;
        }

        echo "\nStarting Do-While Loop \n";
        $i = 0;
        do {
            echo $i,"\n";
        } while ($i > 0);

        echo "\nStarting For Loop \n";
        $i = 1;
        for ($i=10; $i >= 0; $i--) { 
            echo $i,"\n";
        }

        echo "\nStarting ForEach Loop \n";

        foreach ($output as $key => $value) {
            echo "$key => $value \n";
        }
    ?>
</pre>
</body>
</html>