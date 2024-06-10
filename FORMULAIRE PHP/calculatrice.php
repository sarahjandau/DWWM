<?php 

ob_start(); 
?>

<form action="resultatcalcul.php" method="POST">
    <label for="nombre">Entrez le premier nombre:</label>
    <br>
    <input type="number" name="nombre1" id="nombre1">
    <br>
    <input type="number" name="nombre2" id="nombre2">
    <br>
    <select name="operation" id="operation">
        <option value="addition">addition</option>
        <option value="soustraction">soustraction</option>
        <option value="multiplication">multiplication</option>
        <option value="division">division</option>
    </select>
    <input type="submit" value="Calculer">

</form>

<?php
    $content = ob_get_clean();
    $titre = "Calculatrice";
    require "template.php";
?>