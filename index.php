<?php
$Championdeligue1= $_POST['Ligue1'];

switch ($Championdeligue1) {
    case"PSG":
        echo "Les Champions de ligue 1";
    break;
    case"OM":
        echo "Les chèvres de ligue 1";
    break;
    case"OL":
        echo "Les 7eme de ligue 1";
    break;
}
?>

<form action="index.php" method="POST">
<select name="Ligue1">
<option value= "PSG">PSG</option>
<option value= "OM">OM</option>
<option value= "OL">OL</option>
<input type="submit">
</select>
