<?php

echo"<h1 align=center>PHP et les fichiers XML</h1>";
$xml=simplexml_load_file("bib.xml");

foreach($xml->children() as $key=>$val)  // $key: nom de la catégorie ; $val : contenu catégorie
{
    echo"<h1 align=center>$key</h1>";  //On récupère les catégries
    foreach($val->children() as $ckey=>$cval)  //$cval: les enfants de chaque catégorie
    {
        $i=0;
        echo"<h3>$ckey:$i</h3>";
        foreach($cval as $keyElement=>$element)
        {
            echo"<h4>$keyElement : $element</h4>";
        }
    }
    echo"<hr/>";
}
?>