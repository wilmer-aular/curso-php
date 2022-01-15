<?php
  $tamaño ="10px";
if(isset($_COOKIE["font-size"])){
    $tamaño = htmlspecialchars($_COOKIE["font-size"]);
    // es necesario proteger las cookies con htmlspecialchars 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>texto</title>
    <style>
    p {
        font-size: <?php echo $tamaño ?>;
    }
    </style>
</head>

<body>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique architecto necessitatibus ipsam magnam
        debitis! Accusamus sint, ut earum, corrupti, alias vel commodi voluptate voluptas unde repudiandae iste.
        Eveniet, laudantium incidunt.</p>
</body>

</html>