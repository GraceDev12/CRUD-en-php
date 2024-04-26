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

// Récupérer les données de la table images
$requete = 
"SELECT id, nom, quantite, prix, decrire, nom_image, chemin_image, enregistre, statut, date_enregistrement, last_update, categorie_prod FROM categories";
$resultat = $connexion->query($requete);
$compter = 0;
// Afficher les images
if ($resultat->num_rows > 0) {
    
    while ($row = $resultat->fetch_assoc()) {
        $compter = $compter + 1;
        echo "<tr><td>" . $compter . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["quantite"] . "</td>";
        echo "<td>" . $row["prix"] . " fcfa </td>";
        echo "<td>" . $row["decrire"] . "</td>";
        echo "<td><img src='" . $row["chemin_image"] . "' alt='" . $row["nom_image"] . "' width='100'><br><hr></td>";
        echo "<td>" . $row["statut"] . "</td>";
        echo "<td>" . $row["categorie_prod"] . "</td>";
        echo "<td>" . $row["enregistre"] . "</td>";
        echo "<td>" . $row["date_enregistrement"] . "</td>";
        echo "<td>" . $row["last_update"] . "</td></tr>";
    }
} else {
    echo "Aucune image trouvée.";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
