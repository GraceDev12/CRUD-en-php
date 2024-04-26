<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    

<h1>G-Prod</h1>
<a href="ajouter_produit.php">Ajouter produit</a>
</header>

    <table>
        <thead>
            <tr>
                <th>num produit</th>
                <th>nom du produit</th>
                <th>quantité</th>
                <th>prix</th>
                <th>description</th>
                <th>image</th>
                <th>statut</th>
                <th>Categorie du produit</th>
                <th>Enregistré par</th>
                <th>Date enregistrement</th>
                <th>Dernière mise a jour</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "afficher_images.php";

            ?>
        </tbody>
    </table>
</body>
</html>


<style>
    body{
        margin-left: 5%;
        margin-top: 3%;

    }
    table{
        margin-top: 3%;
        border : 1px solid black;
    }
    tr, td, th, tbody, thead{
        padding : 4px;
        border : 1px solid black;

    }
    table {
  margin-left: 1%;
      border-collapse: collapse;
      margin-bottom: 20px;
      width: 90%;
    }
    h1{
        margin-left: 2%;
        font-style : italic;
        color: green;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    header{
        display : flex;
    }
    a{
        border : 1px solid black;
        padding : 10px;
        position : absolute;
        right : 0;
        border-radius : 20px;
        background: aliceblue;

    }
</style>