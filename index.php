
<!--Partie Rico-->
<?php
$fichier = "source.xml";  
$xml = simplexml_load_file($fichier) or die("Error: Cannot create object");
echo $xml->page[0]->menu;
echo $xml->page[0]->title;
echo $xml->page[0]->content; 
echo $xml->page[1]->menu;
echo $xml->page[1]->title;
echo $xml->page[1]->content;
echo $xml->page[2]->menu;
echo $xml->page[2]->title ;
echo $xml->page[2]->content ;
echo $xml->page[3]->menu;
echo $xml->page[3]->title ;
echo $xml->page[3]->content ;
?>
