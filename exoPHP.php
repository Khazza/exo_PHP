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
<!-- 1-Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
2-Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
3-Affichez le nombre de pays dans le tableau.
4-Supprimer du tableau toutes les capitales commençant par la lettre 'B', puis affichez le contenu du tableau. -->
<?php
// Tableau des capitales
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

// 1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
// Trier le tableau par ordre alphabétique en utilisant la fonction 'asort()'
asort($capitales);
// Parcourir le tableau avec une boucle foreach pour afficher chaque capitale et son pays correspondant
foreach($capitales as $capitale => $pays) {
    echo "$capitale - $pays <br>";
}

// 2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
// Trier le tableau par ordre alphabétique en utilisant la fonction 'asort()'
asort($capitales);
// Parcourir le tableau avec une boucle foreach pour afficher chaque pays et sa capitale correspondante
foreach($capitales as $capitale => $pays) {
    echo "$pays - $capitale <br>";
}

// 3. Affichez le nombre de pays dans le tableau.
// Utiliser la fonction 'count()' pour compter le nombre de pays dans le tableau
$nbPays = count($capitales);
echo "Il y a $nbPays pays dans le tableau. <br>";

// 4. Supprimer du tableau toutes les capitales commençant par la lettre 'B', puis affichez le contenu du tableau.
// Parcourir le tableau avec une boucle foreach pour identifier les capitales commençant par 'B' et les supprimer avec 'unset()'
foreach($capitales as $capitale => $pays) {
    if(substr($capitale, 0, 1) === 'B') {
        unset($capitales[$capitale]);
    }
}
// Afficher le contenu du tableau modifié
foreach($capitales as $capitale => $pays) {
    echo "$pays - $capitale <br>";
}
?>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements
Affichez la liste des régions suivie du nombre de départements -->
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

echo "<br>";

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


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!--Exercices PHP - Les fonctions : -->
<!--Ecrivez une fonction qui permette de générer un lien.
La fonction doit prendre deux paramètres, le lien et le titre
 lien("https://www.reddit.com/", "Reddit Hug");
Appelée de cette façon, la fonction doit générer
<a href="https://www.reddit.com/">Reddit Hug</a> -->
<?php
function lien($url, $titre) {
    return '<a href="' . $url . '">' . $titre . '</a>';
}

echo lien("https://www.reddit.com/", "Reddit Hug");
?>

<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- Ecrivez une fonction qui calcul la somme des valeurs d'un tableau
La fonction doit prendre un paramètre de type tableau
 $tab = array(4, 3, 8, 2);
 $resultat = somme($tab);
$resultat doit contenir 17 -->
<?php
function somme($tableau) {
    $somme = 0;
    foreach ($tableau as $valeur) {
      $somme += $valeur;
    }
    return $somme;
  }
  
  $tab = array(4, 3, 8, 2);
$resultat = somme($tab);
echo $resultat; // Affiche 17

?>


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) 
respecte les règles suivantes :

Faire au moins 8 caractères de long
Avoir au moins 1 chiffre
Avoir au moins une majuscule et une minuscule
$resultat = complex_password("TopSecret42");
$resultat doit contenir true.

Aidez-vous des expressions régulières ! -->

<?php
function complex_password($password) {
  // Vérifie si le mot de passe a au moins 8 caractères
  if (strlen($password) < 8) {
    return false;
  }

  // Vérifie si le mot de passe contient au moins un chiffre
  if (!preg_match('/\d/', $password)) {
    return false;
  }

  // Vérifie si le mot de passe contient au moins une majuscule et une minuscule
  if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
    return false;
  }

  // Si toutes les règles sont respectées, retourne true
  return true;
}

// Test de la fonction
$password = "TopSecret42";
$resultat = complex_password($password);
var_dump($resultat); // Doit afficher bool(true)
if ($resultat)
echo "Mot de passe ok"; 
else
echo "Mot de passe incorrect" 
?>

<!-- Explication de la fonction :
La fonction complex_password() prend un paramètre $password qui est le mot de passe à vérifier. 
Elle commence par vérifier si le mot de passe a au moins 8 caractères en utilisant la fonction strlen(). Si ce n'est pas le cas, la fonction retourne false.
Ensuite, la fonction utilise des expressions régulières pour vérifier si le mot de passe contient au moins un chiffre (\d), 
une majuscule ([A-Z]) et une minuscule ([a-z]). Si l'une de ces conditions n'est pas respectée, la fonction retourne false.
Si toutes les règles sont respectées, la fonction retourne true. -->


<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- PHP - Les dates et les heures -->
<!-- Exercices
    Utilisez l'objet DateTime, sauf mention contraire.
    1- Trouvez le numéro de semaine de la date suivante : 14/07/2019.
    2- Combien reste-t-il de jours avant la fin de votre formation ?
    3- Comment déterminer si une année est bissextile ?
    4- Montrez que la date du 32/17/2019 est erronée.
    5- Affichez l'heure courante sous cette forme : 11h25.
    6- Ajoutez 1 mois à la date courante.
    7- Que s'est-il passé le 1000200000 ? -->

<?php
// 1- Trouver le numéro de semaine de la date suivante : 14/07/2019.
$date = new DateTime('2019-07-14');
$weekNumber = $date->format('W');
echo "Le numéro de semaine de la date 14/07/2019 est : " . $weekNumber . "<br>";

// 2- Combien reste-t-il de jours avant la fin de votre formation ?
$today = new DateTime();
$endFormation = new DateTime('2023-06-02');
$remainingDays = $today->diff($endFormation)->format('%a');
echo "Il reste " . $remainingDays . " jours avant la fin de ma formation.<br>";

// 3- Comment déterminer si une année est bissextile ?
$year = 2024;
$isLeap = date("L", strtotime("$year-01-01"));
if ($isLeap == 1) {
    echo "L'année " . $year . " est bissextile.<br>";
} else {
    echo "L'année " . $year . " n'est pas bissextile.<br>";
}

// 4- Montrez que la date du 32/17/2019 est erronée.
$date = DateTime::createFromFormat('d/m/Y', '32/17/2019');
if (!$date) {
    echo "La date 32/17/2019 est erronée.<br>";
}

// 5- Affichez l'heure courante sous cette forme : 11h25.
$heure = new DateTime();
echo "Il est actuellement " . $heure->format('H\hi') . ".<br>";

// 6- Ajoutez 1 mois à la date courante.
$date = new DateTime();
$date->add(new DateInterval('P1M'));
echo "Dans un mois, nous serons le " . $date->format('d/m/Y') . ".<br>";

// 7- Que s'est-il passé le 1000200000 ?
$date = new DateTime('@1000200000');
echo "Le 1000200000 correspond au " . $date->format('d/m/Y à H\hi\ms') . ".<br>";
?>



<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- PHP - Les formulaires et les variables serveur -->
<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupère les valeurs des champs du formulaire
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Affiche les valeurs des champs
  echo "Nom: " . $nom . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Message: " . $message . "<br>";
}
?>
Dans cet exemple, nous avons supposé que les noms des champs du formulaire sont "nom", "email" et "message". Vous pouvez modifier ces noms en fonction de vos besoins.

Pour utiliser ce script, vous devez le sauvegarder dans un fichier avec l'extension ".php" et le téléverser sur votre serveur. 
Ensuite, vous devez modifier l'attribut "action" de la balise "form" pour qu'il pointe vers l'URL de votre script PHP.

Par exemple :
<form action="monscript.php" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom"><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email"><br>

  <label for="message">Message :</label>
  <textarea id="message" name="message"></textarea><br>

  <input type="submit" value="Envoyer">
</form>
Dans cet exemple, l'attribut "action" de la balise "form" pointe vers le fichier "monscript.php". 
L'attribut "method" de la balise "form" est défini sur "post" pour que les valeurs des champs soient envoyées dans le corps de la requête HTTP.