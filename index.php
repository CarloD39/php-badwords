<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. 
Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWordt</title>
</head>
<body>
    
    <?php

    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper orci sed augue feugiat sodales. Quisque blandit luctus tortor, interdum feugiat orci ultricies sit amet. Integer in sodales mi, sed convallis arcu. Nam feugiat felis tortor, in consectetur elit rutrum sed. Integer nibh leo, accumsan quis turpis in, feugiat malesuada ipsum. Curabitur magna lectus, imperdiet at condimentum ut, elementum a ante. Cras eget sodales massa. Phasellus placerat mauris sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis accumsan a metus sed blandit.";
    $len = strlen($text);

    
    $badWord = $_GET["badword"];

    $textNew = str_ireplace($badword, '***', $text);

    // calcoliamo nuovamente la lunghezza del nuovo paragrafo con censura
    $lenNew = strlen($textNew);

    ?>

    <p><?php echo $text ?></p>
    <div>La lunghezza del paragrafo é di <?php echo $len?> caratteri.</div>

    <hr/>

    <p><?php echo $textNew ?></p>
    <div>La lunghezza del paragrafo é di <?php echo $lenNew ?> caratteri.</div>



</body>
</html>


