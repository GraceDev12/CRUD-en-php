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
        <input type="text" name="nom" placeholder="Nom du produit" required><br>
        <input type="number" name="quantite" placeholder="Quantité" required><br>
        <input type="number" name="prix" placeholder="Prix du produit" required><br>
        <input type="text" name="decrire" placeholder="Description du produit" required><br>
        <select name="statut">
            <option value="Disponible">Statut du produit</option>
            <option value="Disponible">Disponible</option>
            <option value="Indisponible">Indisponible</option>
        </select>
        <select name="categorie_prod">
        <option value="Aliment">Catégorie du produit</option>
            <option value="Aliment">Aliment</option>
            <option value="Textile">Textile</option>
        </select>
        <input type="text" name="enregistre" placeholder="Nom de l'enregisteur" required><br>
        <input type="file" name="image" accept="image/*" required><br>
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
