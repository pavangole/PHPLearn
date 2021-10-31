<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h3>Creted Indexed Array</h3>";
    $arr = array(1, 2, 3, 4, "cat", "dog");
    var_dump($arr);
    echo "<h3>Creted Associative Array</h3>";
    $ass_array = array(
        "Afganistan" => "Buzkashi",
        "India" => "Hockey",
        "Austrilia" => "Cricket"
    );
    ?>
    <table>
        <thead>
            <td>Country</td>
            <td>National Game</td>
        </thead>
        <tbody>
            <?php
            foreach ($ass_array as $key => $value) {
                echo "
            <tr class='bor'>
            <td>$key</td>
            <td>$value</td>
            </tr>
            ";
            }
            ?>
        </tbody>

    </table>
    <?php
    echo "<h3>Creted Multidimensional Array</h3>";
    $multi_array = array(
        array(1, 2, 3, 5),
        array(6, 7, 8, 9),
        array(10, 11, 12, 13),
        array(14, 15, 16, 17, 18)
    );
    for ($i = 0; $i < count($multi_array); $i++) {
        for ($j = 0; $j < count($multi_array); $j++) {
            echo $multi_array[$i][$j];
            echo " ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>