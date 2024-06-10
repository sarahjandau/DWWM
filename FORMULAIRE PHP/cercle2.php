<?php 

ob_start(); 
?>

<form action="resultat.php" method="POST">
    <label for="rayon">Entrez le rayon du cercle :</label>
    <br>
    <input type="number" name="rayon" id="rayon">
    <br>
    <input type="submit" value="Calculer">

</form>

<?php
    $content = ob_get_clean();
    $titre = "Exemple avec la méthode POST";
    require "template.php";
?>