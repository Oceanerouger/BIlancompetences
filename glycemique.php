<html lang="fr">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
       integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <link rel="stylesheet" href="css/style.css">
       <title>Charge Glycémique</title>
</head>

<body>
    <h1>Charge Glycémique</h1>
    <div class="col-md-12 choix">
        <form class="col-md-12 choix" action="dbco.php" method="post">
            <!--IMPORT JSON-->
        <h2 class="enonce">Choissisez vos aliments pour composer votre repas:</h2><br>
    <input type="checkbox" name="Abricot"> Abricot<br>
    <input type="checkbox" name="Amande"> Amande<br>
    <input type="checkbox" name="Avocat"> Avocat<br>
    <input type="checkbox" name="Banane"> Banane<br>
    <input type="checkbox" name="Big Mac Giant"> Big Mac Giant<br>
    <input type="checkbox" name="Nutella"> Nutella<br>
    <input type="checkbox" name="Coca-Cola"> Coca-Cola<br>
    <input type="checkbox" name="Frites"> Frites<br>
    <input type="checkbox" name="Melon"> Melon<br>
    <input type="checkbox" name="Pizza"> Pizza<br>
    <input type="checkbox" name="Lentilles"> Lentilles<br>
  
   
        <button type="submit" class="btn btn-dark" href="php/dbco.php">Choisir ces aliments</button>
        </form>
    </div>

    <div class="col-md-12 enregistrer">
        <h2 class="sauvegarde">Vos aliments:</h2><br>
Ajouter  la suppression d'un aliment! Quand ils seront choisis <br>
        <button type="submit" class="btn btn-dark" href="php/dbco.php">Sauvegarder mes aliments</button>
    </div>   

</body>

</html>