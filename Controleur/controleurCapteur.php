<?php

require('../modele/modeleCapteur.php');





$table=$_GET['table'];
$attribut=$_GET['attribut'];
$ID=$_GET['ID'];
$thermo='thermometre';
$number=7;

$data=getAllCapteur($ID);  // return un fetch()
$data2=getArgCapteur($attribut,$ID); // return la valeur de $attribut
$data3=insertIntoCapteur($number,'thermo',25,1,4,3);
$data4=getAllCapteur($number);
$data5=deleteFromCapteur($number);


require ('../Vue/vueCapteur.php');

?>


