<?php

echo"<h1 align=center>PHP et les fichiers XML</h1>";
$xml=simplexml_load_file("bib.xml");
//var_dump($xml);
// Lecture des données du premier element du fichier xml
echo "Titre :".$xml->titre."<br />";
echo "Auteur :".$xml->auteur."<br />";
echo "Date :".$xml->date."<br />";
?>