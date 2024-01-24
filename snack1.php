<?php 
$match=[
    [
        'squadra_casa' =>'Atlanta Hawks',
        'squadra_ospite' =>'Oklahoma City Thunder',
        'punti_sq_casa'=>111,
        'punti_sq_ospite'=>109,
    ],
    [
        'squadra_casa' =>'Charlotte Hornets',
        'squadra_ospite' =>'Chicago Bulls',
        'punti_sq_casa'=>153,
        'punti_sq_ospite'=>124,
    ],
    [
        'squadra_casa' =>'Cleveland Cavaliers',
        'squadra_ospite' =>'Denver Nuggets',
        'punti_sq_casa'=>103,
        'punti_sq_ospite'=>108,
    ],
    [
        'squadra_casa' =>'Milwaukee Bucks',
        'squadra_ospite' =>'Washington Wizards',
        'punti_sq_casa'=>109,
        'punti_sq_ospite'=>114,
    ],
    [
        'squadra_casa' =>'Boston Celtics',
        'squadra_ospite' =>'Philadelphia 76ers',
        'punti_sq_casa'=>122,
        'punti_sq_ospite'=>107,
    ],
    [
        'squadra_casa' =>'Los Angeles Lakers',
        'squadra_ospite' =>'Golden State Warriors',
        'punti_sq_casa'=>127,
        'punti_sq_ospite'=>116,
    ],
];

foreach($match as $product){
   echo $product['squadra_casa']." - ".$product['squadra_ospite']." | ".$product['punti_sq_casa']."-".$product['punti_sq_ospite']."<br>";
}
?>