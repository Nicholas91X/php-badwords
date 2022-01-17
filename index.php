<?php
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iste fugiat quaerat voluptate nostrum nihil. Possimus, amet. A obcaecati odio, necessitatibus illo laborum, optio, sunt quaerat dolores nulla officiis iure!";

$paragrafoModificato = str_replace($_GET['parola'], '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    <h3>Totale caratteri paragrafo: <?php echo strlen($paragrafo); ?></h3>
    <p>
        <?php
        echo $paragrafo;
        ?>
    </p>
    <p>
        <?php
        echo $paragrafoModificato;
        ?>
    </p>
</body>
</html>