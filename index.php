<?php

 
$xml=simplexml_load_file("source.xml") or die("Error: Cannot create object");

    echo $xml->page[1]->menu;
    echo $xml->page[1]->title;
    echo $xml->page[1]->content;
    

?> 