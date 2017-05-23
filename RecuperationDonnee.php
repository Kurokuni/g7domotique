<?php
/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 23/05/2017
 * Time: 09:14
 */

$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
curl_setopt($ch, CURLOPT_HEADER, FALSE); curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); $data = curl_exec($ch);
curl_close($ch);
echo "Raw Data:<br />";
echo("$data");


echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";



$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
    echo "Trame $i: $data_tab[$i]<br />";
}






for($i=0, $size=count($data_tab); $i<$size; $i++){
// décodage avec sscanf
    list($t[$i], $o[$i], $r[$i], $c[$i], $n[$i], $v[$i], $a[$i], $x[$i], $year[$i], $month[$i], $day[$i], $hour[$i], $min[$i], $sec[$i]) = sscanf($data_tab[$i],"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    //echo("<br />$t[$i],$o[$i],$r[$i],$c[$i],$n[$i],$v[$i],$a[$i],$x[$i],$year[$i],$month[$i],$day[$i],$hour[$i],$min[$i],$sec[$i]<br />");

}


echo$v[1];