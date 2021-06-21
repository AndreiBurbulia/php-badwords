<?php 
$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore laudantium molestiae eligendi assumenda recusandae quae, id voluptatem. Temporibus sint quidem corrupti in quas distinctio beatae odio expedita iste numquam tenetur neque, nemo voluptas maxime iure. Obcaecati, voluptatibus tempora optio libero totam, magni omnis qui numquam voluptas ea eaque, sed nesciunt.";

$lunghezza_paragrafo = strlen($paragrafo);

$prova = $_GET['parola'];
$nuovo_paragrafo = str_replace($prova, '***', $paragrafo);

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
    <h1>Funzia</h1>
    <p> <?php echo $paragrafo;?> </p>
    <p>La lunghezza del paragrafo è : <?php echo $lunghezza_paragrafo;?> caratteri</p>
    <p>Parola da censurare: <?php echo $prova ?></p>
    <p>Nuovo Paragrafo censurato:</p>
    <p><?php echo $nuovo_paragrafo?></p>
</body>
</html>