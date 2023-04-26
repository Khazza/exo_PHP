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
echo "<table border=1>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($months as $month => $days) {
    echo "<tr><td>$month</td><td>$days</td></tr>";
}
echo "</table>";

// Tri du tableau par ordre croissant du nombre de jours
asort($months);

// Affichage du tableau trié dans un tableau HTML
echo "<br><table border=1>";
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
$errors = DateTime::getLastErrors();
if (!empty($errors['warning_count'])) {
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
<!-- Explications :
1- On crée un objet DateTime pour la date demandée, puis on utilise la méthode format avec le paramètre 'W' pour récupérer le numéro de semaine.

2- On crée un objet DateTime pour la date courante, puis un autre objet pour la date de fin de formation. 
Ensuite, on utilise la méthode diff pour calculer la différence entre les deux dates, 
puis on utilise la méthode format pour récupérer le nombre de jours restants.

3- On définit une année, puis on utilise la fonction date avec le paramètre "L" pour déterminer si elle est bissextile. 
La fonction renvoie 1 si l'année est bissextile, et 0 sinon.

4- On utilise la méthode statique createFromFormat de la classe DateTime pour créer un objet à partir d'une date au format d/m/Y. 
Si la date est erronée, la méthode renvoie false.

5- On crée un objet DateTime pour l'heure courante, puis on utilise la méthode format avec le format 'H\hi' pour l'afficher sous la forme demandée. -->


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
  $prenom = $_POST["prenom"];
  $genre = $_POST["genre"];
  $date = $_POST["ddn"];
  $cp = $_POST["cp"];
  $adresse = $_POST["adresse"];
  $ville = $_POST["ville"];
  $email = $_POST["email"];
  $sujet = $_POST["sujet"];
  $commentaire = $_POST["commentaire"];
  
  // Affiche les valeurs des champs
  echo "Nom: " . $nom . "<br>";
  echo "Prenom: " . $prenom . "<br>";
  echo "Sexe: " . $genre . "<br>";
  echo "Date de naissance: " . $date . "<br>";
  echo "Code Postal: " . $cp . "<br>";
  echo "Adresse: " . $adresse . "<br>";
  echo "Ville: " . $ville . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Sujet: " . $sujet . "<br>";
  echo "Commentaire: " . $commentaire . "<br>";
}
?>

<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!-- PHP - Les dates et les heures -->
<!-- Lecture d'un fichier
Téléchargez ce fichier, qui contient une liste de sites indispensables à la compréhension du monde moderne.
Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.
Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau. -->
<!DOCTYPE html>
<html>
<head>
	<title>Liste de sites indispensables</title>
</head>
<body>
	<h1>Liste de sites indispensables</h1>
	<ul>
		<?php
			// Lecture du fichier
			$lines = file('sites.txt');
			// Boucle sur chaque ligne
			foreach ($lines as $line) {
				// Suppression des caractères d'espacement en début et fin de ligne
				$line = trim($line);
				// Ajout d'un lien hypertexte
				echo '<li><a href="' . $line . '">' . $line . '</a></li>';
			}
		?>
	</ul>
</body>
</html>
<!-- Explications :

La fonction file() est utilisée pour lire le contenu du fichier "sites.txt" et renvoyer chaque ligne sous forme d'élément d'un tableau.
Une boucle foreach est utilisée pour parcourir chaque ligne du tableau et construire un lien hypertexte pour chaque site.
La fonction trim() est utilisée pour supprimer les caractères d'espacement en début et fin de ligne.
La fonction echo est utilisée pour afficher chaque lien hypertexte dans une liste à puces (<ul>). -->

<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
<!DOCTYPE html>
<html>
<head>
	<title>Liste des nouveaux utilisateurs inscrits</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Liste des nouveaux utilisateurs inscrits</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
					<th>Téléphone</th>
					<th>Ville</th>
					<th>Etat</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$file_url = "http://bienvu.net/misc/customers.csv";
					$file_content = file($file_url); // Lire le contenu du fichier CSV distant

					foreach($file_content as $line){
						$data = explode(",", $line); // Découper chaque ligne en utilisant la virgule comme séparateur
						$surname = $data[0];
						$firstname = $data[1];
						$email = $data[2];
						$phone = $data[3];
						$city = $data[4];
						$state = $data[5];
						echo "<tr><td>$surname</td><td>$firstname</td><td>$email</td><td>$phone</td><td>$city</td><td>$state</td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
<!-- Ce code utilise la fonction file() pour lire le contenu du fichier CSV distant, puis la fonction explode() pour découper chaque ligne en utilisant la virgule comme séparateur. 
Ensuite, il affiche les données dans un tableau HTML avec Bootstrap pour un affichage amélioré.
Ce code est sensible aux problèmes de sécurité, tels que les injections de code SQL ou les failles XSS. 
Il est important de sécuriser l'entrée des données en filtrant et en validant les valeurs avant de les afficher ou de les utiliser. -->