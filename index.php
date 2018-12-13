<!--Recupération du fichier source xml pour afficher-->
<!--Partie Rico-->
<?php
$xml=simplexml_load_file("source.xml") or die("C'est impossible");
    echo $xml->page[2]->menu;
    echo $xml->page[2]->title ;
    echo $xml->page[2]->content ;
?>
<?php
$xml=simplexml_load_file("source.xml") or die("C'est impossible");
    echo $xml->page[3]->menu;
    echo $xml->page[3]->title ;
    echo $xml->page[3]->content ;
?>