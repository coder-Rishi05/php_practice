<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> File handling in php</h1>

    <?php

    // <!-- oppening file for reading data -->

    $myfile = 'pk.txt';
    $fp = fopen($myfile, 'w');
    if ($fp === false) {
        echo "Error in opening new file";
        exit();
    }else
    $text = "have a nice day";
    fwrite($fp,$text);
    fclose($fp);
    ?>

</body>

</html>