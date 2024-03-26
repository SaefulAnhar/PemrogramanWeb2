<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $A = 123;
    function Test(){
        $A = "Test";
        echo"variabel A berisi = $A\n";
    }
    Test();
    echo"A diluar fungsi berisi = $A\n";
    ?>
</body>
</html>