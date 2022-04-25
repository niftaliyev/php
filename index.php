<?php
    $lang = isset($_GET['vehicle']) ? $_GET['vehicle'] : 'ru' ;
    include "arr.php";

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    for($i = 0; $i < count($languages); $i++){
        echo '

        <form method="GET">
        <input  type="checkbox"  name="vehicle" value="'.$languages[$i].'">'.$languages[$i].'
        ';
    }
    echo '<br><input type="submit" value="Submit">';

    echo '<ul>';
    foreach ($arr as $value => $k) {
        echo $value;
        foreach ($k as $key => $val) {
            echo '<ul>';
            echo '<li>';
            echo $key . ' ' . $val;
            echo '</li>';
            echo '</ul>';
        }
    }
    echo '</ul>';
    ?>

        <?php           
            for($i = 0; $i < count($languages); $i++){
                $chck = $lang == $languages[$i] ? 'checked="checked"' : '';
                echo '<input '.$chck.' type="checkbox"  >'.$languages[$i].'';
            }   
        ?>

</body>

</html>