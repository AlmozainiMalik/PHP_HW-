
<!-- Variables -->
<?php 
    $title = "PHP Project";
    $num = 40;
    $num2 = 30;
    $bool = true;
    $bool = false;
    $nothing = NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home Page" ?></title>
</head>
<body>

    <?php 
        echo "<h1>Welcome to my $title </h1>";
        echo $num;
        echo "<br>";
        echo $num2;
        echo "<br>";
        echo $num + $num2;
    
    
    ?>


    
</body>
</html>