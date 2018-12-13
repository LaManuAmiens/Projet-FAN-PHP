<?php
$fichier = "source.xml";  
$xml = simplexml_load_file($fichier);
echo $xml->page[0]->menu;
echo $xml->page[0]->title;
echo $xml->page[0]->content;
?>