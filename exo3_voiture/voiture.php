<?php

$marque=$_POST["marque"];
$modele=$_POST["modele"];
$prix=$_POST["prix"];
$chxml="";
// si le fichier n'existe pas, on le crée

if(!file_exists("voitures.xml"))
{
 $chxml="
       <?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n
       <voitures>\n 
         <voiture>\n
             <marque>$marque</marque>\n
             <modele>$modele</modele>\n 
             <prix>$prix</prix>\n
         </voiture>\n
        </voitures>";
}else
// sinon, il faut ajouter à la fin du fichier
{
  $xml=simplexml_load_file("voitures.xml");
  $chxml = $xml->asXML();
  $chxml = str_replace("</voitures>","",$chxml);
  $chxml=$chxml."
      <voiture>\n
          <marque>$marque</marque>\n
          <modele>$modele</modele>\n 
          <prix>$prix</prix>\n
      </voiture>\n
    </voitures>"; 
}

// à la fin au saufvegarde
$verif=file_put_contents("voitures.xml",$chxml); 

?>