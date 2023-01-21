<?php
//variables que necesito
$name=$_POST['name'];
$age=$_POST['age'];
$personaje=$_POST['personaje'];
$hechizo=$_POST['hechizo'];
$tenebrosa=$_POST['tenebrosa'];
$libre=$_POST['libre'];
$empleo=$_POST['empleo'];
$asignatura=$_POST['asignatura'];
$pet=$_POST['pet'];
$ravenclaw=0;
$slytherin=0;
$gryffindor=0;
$hufflepuff=0;
switch ($hechizo) {

    case "expelliarmus" :
    case "patronum":
        $gryffindor++;
        break;
    case "expulso":
    case "imperio":
        $slytherin++;
        break;
    case "revelio":
    case"riddikulus":
        $ravenclaw++;
        break;
    case"lumos":
    case "protego":
        $hufflepuff++;
        break;
    default:
        $msj = "finite incantatem";
}

switch ($tenebrosa) {
    case "mortifago":
        $slytherin++;
        break;
    case "peligro":
        $gryffindor++;
        break;
    case "esconder":
        $ravenclaw++;
        break;
    case "correr":
        $hufflepuff++;
        break;
    case "miedo":
        break;
    default:
        $msj = "mosmordre";
}
switch ($libre) {
    case "bosque":
        $slytherin++;
        break;
    case "menesteres":
        $gryffindor++;
        break;
    case "biblioteca":
        $ravenclaw++;
        break;
    case "comun":
        $hufflepuff++;
        break;
    default:
        $msj = "Hogwarts";
}
    switch ($empleo) {
        case "auror":
            $gryffindor++;
            break;
        case "profe":
        case "profeta":
            $ravenclaw++;
            $hufflepuff++;
            break;
        case "magizoologo":
            $hufflepuff++;
            break;
        case "ministro":
            $ravenclaw++;
            break;
        case "inquisidor":
            $slytherin++;
            break;
        case "quidditch":
            $gryffindor++;
            $slytherin++;
            break;
        default:
            $msj = "Al ministerio de magia!";
    }
 switch ($asignatura) {
     case "artesoscuras":
         $gryffindor++;
         break;
     case "volar":
         $slytherin++;
         $gryffindor++;
         $ravenclaw++;
         $hufflepuff++;
         break;
     case "muggles":
         $ravenclaw++;
         $hufflepuff++;
         break;
     case "herbologia":
         $hufflepuff++;
         break;
     case "encantamientos":
         $ravenclaw++;
         break;
     case "pociones":
         $slytherin++;
         break;
     case "runas":
         $ravenclaw++;
         $slytherin++;
         break;
     case "criaturas":
         $hufflepuff++;
         break;
     case "historia":
         $ravenclaw++;
         break;
     case "transformaciones":
         $gryffindor++;
         $slytherin++;
         break;
     case "adivinacion":
         $hufflepuff++;
         break;
     case "aritmancia":
         $gryffindor++;
         $ravenclaw++;
         break;
     case "indiferente":
         $gryffindor++;
         $slytherin++;
         $ravenclaw++;
         $hufflepuff++;
         break;
     default:
         $msj = "obliviate";
 }
switch ($pet) {
    case "lechuza":
        $gryffindor++;
        $ravenclaw++;
        break;
    case "sapo":
        $slytherin++;
        $hufflepuff++;
        break;
    case "gato" :
        $ravenclaw++;
        $hufflepuff++;
        break;
    case "rata":
        $gryffindor++;
        $slytherin++;
        break;
    case "otro":
        $gryffindor++;
        $slytherin++;
        $hufflepuff;
        $ravenclaw;
        break;
    default:
        $msj = "prrrr";
}

$valor_maximo=max($ravenclaw,$hufflepuff,$gryffindor,$slytherin);
switch ($valor_maximo){
    case $ravenclaw:
        $msj = "¡Enhorabuena tu casa es Ravenclaw!";
        break;
    case $hufflepuff:
        $msj = "¡Enhorabuena tu casa es Hufflepuff!";
        break;
    case $gryffindor:
        $msj = "¡Enhorabuena tu casa es Gryffindor!";
        break;
    case $slytherin:
        $msj = "¡Enhorabuena tu casa es Slytherin!";
        break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu casa de Hogwarts</title>
    <link rel = "stylesheet" type = "text/css" href = "css/stylecasas.css">
</head>
<body>

<h1>El sombrero seleccionador esta pensando...</h1>
<div class="imagen">
<img src="https://cdn.pixabay.com/photo/2020/12/20/10/57/owl-5846674_1280.png" alt="sombrero seleccionador">
</div>
<h3>mmmm...mmmm dificil, muy dificil...... </h3>
<p> Puedo ver que hay valor en ti, tienes fuerza...</p>
<p>Tampoco pareces ser tan tonto como un ladrillo....si señor...hay algo en ese coco</p>
<p>Oh estas rodeado de amigos, y eres un poco cabeza dura</p>
<p>Tampoco eres malo....aunque quiza algo astuto, ¿me equivoco?</p>
<p>si...creo que estarás bien...sin duda alguna</p>
<?= "<h2>$msj</h2>" ?>
<?php

switch ($valor_maximo){
    case $ravenclaw:
        echo '<div class="casas"><img src="https://media.mykaramelli.com/galeria/articulos/decoracion-de-pared-emblema-ravenclaw-harry-potter-61cm_12420_1.jpg"></div>';
        break;
    case $hufflepuff:
        echo '<div class="casas"><img src="https://media.mykaramelli.com/galeria/articulos/decoracion-de-pared-emblema-hufflepuff-harry-potter-61cm_12419_1.jpg"></div>';
        break;
    case $gryffindor:
        echo '<div class="casas"><img src="https://media.mykaramelli.com/galeria/articulos/decoracion-de-pared-emblema-gryffindor-harry-potter-61cm_12422_1.jpg"></div>';
        break;
    case $slytherin:
        echo '<div class="casas"><img src="https://media.mykaramelli.com/galeria/articulos/decoracion-de-pared-emblema-slytherin-harry-potter-61cm_12421_1.jpg"></div>';
        break;
}
?>
</body>
</html>