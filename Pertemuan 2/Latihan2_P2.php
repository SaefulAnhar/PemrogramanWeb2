<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $C = 123;
    function Test(){
        global $C;
        echo"C pada fungsi berisi = $C\n";
    }
    Test();
    echo"C diluar fungsi berisi = $C\n";
    ?>
</body>
</html>