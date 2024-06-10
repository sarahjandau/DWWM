<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <p>Etat civil : </p>

        <label for="option1"> Marié </label>
        <input type="radio" id="option1" name="option" value="Marié">

        <label for="option2"> Célibataire </label>
        <input type="radio" id="option2" name="option" value="Célibataire">

        <label for="option3"> Pacsé </label>
        <input type="radio" id="option3" name="option" value="Pacsé">

        <input type="submit" value="Soumettre">

    </form>

    <?php 
    if(isset($_POST['option'])){
        $option = $_POST['option'];
        echo "Vous avez selectionnez : " . $option ;
    }else{
        echo "Aucune option selectionnée ";
    }
    ?>

</body>
</html>