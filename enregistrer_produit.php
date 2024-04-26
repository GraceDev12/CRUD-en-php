<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$nomBaseDeDonnees = "g_prod"; // Remplacez par le nom de votre base de données

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prix = $_POST["prix"];
    $quantite = $_POST["quantite"];
    $decrire= $_POST["decrire"];
    $categorie_prod = $_POST["categorie_prod"];
    
    // Traitement du fichier image
    $nomImage = $_FILES["image"]["name"];
    $cheminTemporaire = $_FILES["image"]["tmp_name"];
    
    // Chemin vers le dossier d'images à partir de la racine du site
    $cheminImages = "/devoir_de_php/images/";
    $id = $_POST["enregistre"];
    $date_envoie = date('Y-m-d');
    $statut = $_POST["statut"];

    // ...

    // Déplacer le fichier vers le dossier d'images
    $cheminDestination = $_SERVER['DOCUMENT_ROOT'] . $cheminImages . $nomImage;
    move_uploaded_file($cheminTemporaire, $cheminDestination);

    // ...

    // Insérer les informations dans la base de données
    $requete = "INSERT INTO `categories`(`nom`, `prix`, `quantite`, `decrire`, `nom_image`, `statut`, `enregistre`,`categorie_prod`, `date_enregistrement`, `last_update`, `chemin_image`)
    VALUES ('$nom', '$prix', '$quantite', '$decrire', '$nomImage', '$statut', '$id', '$categorie_prod', '$date_envoie', '$date_envoie', '$cheminImages$nomImage')";

    if ($connexion->query($requete) === TRUE) {
        echo "Enregistrement réussi";
        header("Location: index.php");
    } else {
        echo "Erreur d'enregistrement : " . $connexion->error;
    }
}

// Fermer la connexion à la base de données
$connexion->close();
?>
