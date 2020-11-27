<?php
//Créer tableau associatif des personnes présentes dans votre groupe. Utilisez pour les clés "person1", "perosn2",...
//key 'yoann'=>'person1'value
$tableau=array(
    'person1'=>'yoann',
    'person2'=>'saufiane',
    'person3'=> 'aimad',
    'person4'=>'célia',
    'person5'=>'erwann',
    'person6'=> 'jérémy',
    'person7'=>'miguel',
    'person8'=>'sanaa',
);
    var_dump($tableau);
    echo '<br>';
    echo implode($tableau);
    echo '<br>';
    foreach ($tableau as $key => $value) {
    echo "key : $key value: $value <br>";
    }
//Code à faire ici