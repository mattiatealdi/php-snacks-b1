<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<p>Tra gli oltre 1.500 post di questo blog, il record degli accessi è di un post di molti anni fa, dedicato a un tema di nicchia, quasi tecnico: il paragrafo, anzi la differenza tra paragrafo e capoverso. Il perché di tanto interesse e successo rimane per me ancora un mistero.

Qualche giorno fa ho incrociato un post del celeberrimo Copyblogger con le “10 revisioni avanzate per creare paragrafi più efficaci”. Dietro il titolo roboante e presuntuosetto poche indicazioni, alcune tirate proprio per i capelli che con i paragrafi c’entrano poco e niente ma permettono allo scafatissimo blog di linkare un buon numero di altri suoi post.

Superata rapidamente la delusione, quel vecchio post mi è tornato alla mente e vi si sono aggregate intorno tante considerazioni e pratiche sui paragrafi maturate negli ultimi anni che non avevo però mai organizzato in un insieme utile e coerente. Per me e per voi. Eccole qui.</p>


    <?php

    $text = 'Tra gli oltre 1.500 post di questo blog, il record degli accessi è di un post di molti anni fa, dedicato a un tema di nicchia, quasi tecnico: il paragrafo, anzi la differenza tra paragrafo e capoverso. Il perché di tanto interesse e successo rimane per me ancora un mistero.

    Qualche giorno fa ho incrociato un post del celeberrimo Copyblogger con le “10 revisioni avanzate per creare paragrafi più efficaci”. Dietro il titolo roboante e presuntuosetto poche indicazioni, alcune tirate proprio per i capelli che con i paragrafi c’entrano poco e niente ma permettono allo scafatissimo blog di linkare un buon numero di altri suoi post.
    
    Superata rapidamente la delusione, quel vecchio post mi è tornato alla mente e vi si sono aggregate intorno tante considerazioni e pratiche sui paragrafi maturate negli ultimi anni che non avevo però mai organizzato in un insieme utile e coerente. Per me e per voi. Eccole qui.';


    $text = str_replace('.','</p><p>', $text);



    ?>


    <p><?php echo $text ?></p> 

</body>
</html>