<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement d'image</title>
</head>
<body>
    <form action="enregistrer_produit.php" method="post" enctype="multipart/form-data">
        <h2>Ajouter un produit</h2>
        <input type="text" name="nom" placeholder="Nom d'utilisateur" required><br>
        <input type="number" name="quantite" placeholder="Mot de passe" required><br>
        <input type="submit" value="Enregistrer" class="enregistrer">
    </form>
</body>
</html>

<style>
    body {
        background-color: rgb(197, 213, 248);
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    form{
        border: 1px solid black;
        width : 30%;
        background-color: white; /* Fond bleu */
        padding : 3%;
    }
    input, select{
        width : 90%;
        margin-top : 5%;
        margin-left : 5%;
        height : 30px;
        border-radius : 10px;
        font-size : 20px;

    }
    h2{
        text-align : center;
    }
    .enregistrer{
        background-color: green;
        font-size : 20px;
        color : white;
    }
</style>
