<?php 
require "fonctions.php";
$rayon = $resultats = $message = "";

if (isset($_POST['rayon'])) {
    $rayon = $_POST['rayon']; 
    if (verifierSaisie($rayon)) {
        $resultats = calculerCercle($rayon);
    } else {
        $message = "Veuillez entrer un nombre valide :";
    }
}

ob_start();
?>

<form action="cercle.php" method="POST">
    <label for="rayon">Entrez le rayon du cercle : </label>
    <br>
    <input type="number" name="rayon" id="rayon">
    <br>
    <input type="submit" value="Calculer">

    <?php if (!empty($resultats)): ?>
        <p>La circonférence du cercle est : <?= $resultats['circonference']; ?> </p>
        <p>La surface du cercle est : <?= $resultats['surface']; ?> </p>
    <?php endif; ?>

    <?php if ($message): ?>
        <p><?= $message; ?></p>
    <?php endif; ?>
</form>

<?php
$content = ob_get_clean();
$titre = "Exemple avec la méthode POST";
require "template.php";
?>
