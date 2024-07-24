<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="section1">
    <div class="div">
      <div class="calendrierMatch">CALENDRIER DES MATCHS</div>
        <div class="CARD-CONTAINER">
          <div class="overlap-group">
            <img class="ESPAGNE" src="img/ESPAGNE.png" />
            <img class="FRANCE" src="img/FRANCE.png" />
            <div class="TITRE-FRANCE">FRANCE</div>
            <div class="TITRE-ESPAGNE">ESPAGNE</div>
            <div class="overlap">
              <div class="DATE-MATCH">Samedi 27 Juillet <br />18h30</div>
              <div class="CATEGORIES-MATCH">TOURS PRELEMINAIRE FEMMES</div>
            </div>
          </div>
        </div>
        <div class="bouton">
          <div class="div-wrapper"><div class="text-wrapper-2">VOIR TOUT</div>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="section">
    <div class="CONTAINER2">
      <div class="container">
            <div class="overlap-group"><div class="text-wrapper">JOUEURS</div></div>
          </div>
          <div class="overlap-wrapper">
            <div class="overlap"><div class="div">MATCHS</div></div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="div-wrapper"><div class="text-wrapper-2">BILLETERIE</div></div>
          </div>
          <div class="container-2">
            <div class="overlap-2"><div class="text-wrapper-3">EQUIPES</div></div>
          </div>
        </div>
        <p class="TOUTE-l-ACTU-DU">TOUTE L’ACTU DU <br />WATER POLO</p>
      </div>
    </div>
  


</body>


</html>



<?php
$content = ob_get_clean();
$titre = "Accueil";
require "public/template.php";
?>