<?php $gollum = "Tre Anelli ai Re degli Elfi sotto il cielo che risplende,
Sette ai Principi dei Nani nelle lor rocche di pietra,
Nove agli Uomini Mortali che la triste morte attende,
Uno per l’Oscuro Sire chiuso nella reggia tetra,
Nella Terra di Mordor, dove l’Ombra nera scende.
Un Anello per domarli, un Anello per trovarli,
Un Anello per ghermirli e nel buio incatenarli
Nella Terra di Mordor, dove l’Ombra cupa scende"; 


$gandalf = $_GET["censura"];

$sauron = $gandalf;
$aragorn = "***";

$galadriel = str_replace($sauron, $aragorn, $gollum);
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
    <h1> <?php echo $gollum; ?> </h1>
    <h3> <?php echo strlen($gollum); ?> </h3>
    <h1>ECCO LA TUA FILASTROCCA CENSURATA</h1>
    <h1> <?php echo $galadreil; ?> </h1>
    <h3> <?php echo strlen($galadreil); ?> </h3>
</body>
</html>
