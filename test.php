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
ksort($capitales);
// Parcourir le tableau avec une boucle foreach pour afficher chaque capitale et son pays correspondant
foreach($capitales as $capitale => $pays) {
    echo "$capitale - $pays <br>";
}

echo "<br>";

// 2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
// Trier le tableau par ordre alphabétique en utilisant la fonction 'asort()'
asort($capitales);
// Parcourir le tableau avec une boucle foreach pour afficher chaque pays et sa capitale correspondante
foreach($capitales as $capitale => $pays) {
    echo "$pays - $capitale <br>";
}

echo "<br>";

// 3. Affichez le nombre de pays dans le tableau.
// Utiliser la fonction 'count()' pour compter le nombre de pays dans le tableau
$nbPays = count($capitales);
echo "Il y a $nbPays pays dans le tableau. <br>";

echo "<br>";

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

echo "<br>";

$nbPays = count($capitales);
echo "Il y a $nbPays pays dans le tableau. <br>";

?>