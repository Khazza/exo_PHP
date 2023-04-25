<!-- Exercices PHP - Les boucles: -->
<!--Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... :-->
<?php
for ($i = 1; $i <= 150; $i+=2) {
    echo $i . " ";
}
?>
<!--Une boucle "for" qui initialise la variable $i à 1, définit une condition pour continuer 
la boucle tant que $i est inférieur ou égal à 150, et ajoute 2 à $i à chaque tour de boucle.
La deuxième ligne affiche la valeur actuelle de $i suivie d'un espace. -->

<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!--Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers : -->
<?php
for ($i = 1; $i <= 500; $i++) {
    echo $i . ": Je dois faire des sauvegardes régulières de mes fichiers<br>";
}
?>
<!--Une boucle "for" qui initialise la variable $i à 1, 
définit une condition pour continuer la boucle tant que $i est inférieur ou égal à 500, et ajoute 1 à $i.
La deuxième ligne affiche la phrase "Je dois faire des sauvegardes régulières de mes fichiers". -->


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!--Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML :-->
<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
</head>
<body>
<table border="1">
    <?php
    for ($i=-1; $i<=12; $i++) {
        echo "<tr>";
        for ($j=-1; $j<=12; $j++) {
            if ($i == -1 && $j == -1) {
                echo "<td><b></b></td>";
            } else if ($i == -1) {
                echo "<td><b>$j</b></td>";
            } else if ($j == -1) {
                echo "<td><b>$i</b></td>";
            } else {
                echo "<td>" . ($i*$j) . "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
<!-- On crée un tableau HTML avec une bordure de 1 pixel.
La boucle "for" créer des lignes et des colonnes dans le tableau.
On créer une ligne de tableau et une boucle imbriquée pour créer chaque cellule dans la ligne.
La condition "if" à la ligne 12 vérifie si le programme est en train de créer la première cellule du tableau 
(ligne et colonne égales à 0). Si oui, la cellule est simplement laissée vide avec la balise "<td></td>".
Les conditions "elseif" vérifient si la boucle est en train de créer la première ligne ou la première colonne du tableau.
La condition "else" applique à toutes les autres cellules et affiche le produit de la valeur de la ligne et de la colonne correspondantes. -->


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- Exercices PHP - Les tableaux: -->
<!-- 1. Mois de l'année non bissextile
Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.
Utilisez le nom des mois comme clés de votre tableau associatif.
Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.
Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat. -->
<?php
// Tableau associatif des mois avec le nombre de jours
$months = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);

// Affichage du tableau dans un tableau HTML
echo "<table>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($months as $month => $days) {
    echo "<tr><td>$month</td><td>$days</td></tr>";
}
echo "</table>";

// Tri du tableau par ordre croissant du nombre de jours
asort($months);

// Affichage du tableau trié dans un tableau HTML
echo "<br><table>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($months as $month => $days) {
    echo "<tr><td>$month</td><td>$days</td></tr>";
}
echo "</table>";
?>
<!-- Explications :

On crée un tableau associatif avec les noms des mois comme clés et le nombre de jours comme valeurs.
On utilise la boucle foreach pour parcourir chaque élément du tableau et afficher le nom du mois et le nombre de jours dans un tableau HTML.
On utilise la fonction asort() pour trier le tableau par ordre croissant du nombre de jours.
On affiche à nouveau le tableau trié dans un tableau HTML.
Note : Ce tableau ne tient pas compte de l'année bissextile. -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

// Afficher la liste des capitales suivie du nom du pays
asort($capitales); // trier le tableau par ordre alphabétique des capitales
foreach ($capitales as $capitale => $pays) {
    echo "$capitale - $pays <br>";
}

echo "<br>";

// Afficher la liste des pays suivie du nom de la capitale
sort($capitales); // trier le tableau par ordre alphabétique des pays
foreach ($capitales as $capitale => $pays) {
    echo "$pays - $capitale <br>";
}

echo "<br>";

// Afficher le nombre de pays dans le tableau
echo "Nombre de pays dans le tableau : " . count($capitales) . "<br>";

echo "<br>";

// Supprimer du tableau toutes les capitales commençant par la lettre 'B'
foreach ($capitales as $capitale => $pays) {
    if (substr($capitale, 0, 1) == "B") {
        unset($capitales[$capitale]);
    }
}

// Afficher le contenu du tableau après suppression
foreach ($capitales as $capitale => $pays) {
    echo "$capitale - $pays <br>";
}


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

ksort($departements); // Tri les régions par ordre alphabétique

foreach ($departements as $region => $dep_list) {
    echo "<strong>$region :</strong> ";
    echo implode(", ", $dep_list);
    echo "<br>";
}
?>


<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

foreach ($departements as $region => $dep_list) {
    echo "<strong>$region :</strong> ";
    echo count($dep_list);
    echo " départements<br>";
}
?>
