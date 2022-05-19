<?php 

$text = "Che bella barca sembra una barca tipo una barca";
var_dump($text);

$badword = $_GET["badword"];
echo str_replace($badword, "***", $text);



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

<p></p>

    
</body>
</html>