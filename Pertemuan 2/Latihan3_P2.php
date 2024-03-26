<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function dicoba(){
        static $a = 0;
        echo"Nilai a :";
        echo $a;
        echo"<br>";
        $a++;
    }
    dicoba();
    dicoba();
    dicoba();
    dicoba();
    ?>
</body>
</html>