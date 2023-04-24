<!-- Exercices:
    Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... :-->
<?php
for ($i = 1; $i <= 150; $i+=2) {
    echo $i . " ";
}
?>
La première ligne commence une boucle "for" qui initialise la variable $i à 1, définit une condition pour continuer 
la boucle tant que $i est inférieur ou égal à 150, et ajoute 2 à $i à chaque tour de boucle.
La deuxième ligne affiche la valeur actuelle de $i suivie d'un espace.


<!--Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers : -->
<?php
for ($i = 1; $i <= 500; $i++) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers<br>";
}
?>
La première ligne commence une boucle "for" qui initialise la variable $i à 1, 
définit une condition pour continuer la boucle tant que $i est inférieur ou égal à 500, et ajoute 1 à $i à chaque tour de boucle.
La deuxième ligne affiche la phrase "Je dois faire des sauvegardes régulières de mes fichiers", suivie d'une balise HTML "<br>" pour passer à la ligne.


<!--Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML :-->
<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
</head>
<body>
    <table border="1">
        <?php
        for ($i = 0; $i <= 12; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= 12; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                } elseif ($i == 0) {
                    echo "<td>$j</td>";
                } elseif ($j == 0) {
                    echo "<td>$i</td>";
                } else {
                    echo "<td>" . $i * $j . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
La première ligne déclare le type de document HTML que le navigateur doit interpréter.
Les lignes 2 à 6 définissent l'en-tête de la page HTML, y compris le titre.
La ligne 7 ouvre le corps de la page HTML.
La ligne 8 crée un tableau HTML avec une bordure de 1 pixel.
La boucle "for" à partir de la ligne 9 crée des lignes et des colonnes dans le tableau.
Les lignes 10 à 18 créent une ligne de tableau et une boucle imbriquée pour créer chaque cellule dans la ligne. Les cases de la première ligne et de la première colonne contiennent simplement les valeurs de 0 à 12. Les autres cases contiennent le produit de la valeur de la ligne et de la colonne correspondantes.
La condition "if" à la ligne 12 vérifie si le programme est en train de créer la première cellule du tableau (ligne et colonne égales à 0). Si oui, la cellule est simplement laissée vide avec la balise "<td></td>".
Les conditions "elseif" à la ligne 14 et 17 vérifient si la boucle est en train de créer la première ligne ou la première colonne du tableau, respectivement. Dans ce cas, la cellule contient simplement la valeur de la ligne ou de la colonne correspondante.
La condition "else" à la ligne 19 s'applique à toutes les autres cellules et affiche le produit de la valeur de la ligne et de la colonne correspondantes.
Les lignes 20 à 22 ferment les balises ouvertes et ferment la boucle "for".
La ligne 23 ferme le corps de la page HTML.
La ligne 24 ferme le document HTML.