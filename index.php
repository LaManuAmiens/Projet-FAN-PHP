<!--Recupération du fichier source xml pour afficher-->
<!--Partie Rico-->
<!DOCTYPE HTML>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Projet FAN</title>
</head>
<body>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js%22%3E"</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js%22%3E"</script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>