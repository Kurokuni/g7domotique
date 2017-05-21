<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

foreach ($nbadresse as $element)
{
    echo '<input type="button" value="Adresse '.$element[0]. $element[1]. $element[2]. $element[3]. $element[4].'" onclick="alert(\'Adresse\')">';
}

?>

</body>
</html>
