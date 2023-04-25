<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupère les valeurs des champs du formulaire
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $genre = $_POST["genre"];
  $date = $_POST["date"];
  $cp = $_POST["cp"];
  $adresse = $_POST["adresse"];
  $ville = $_POST["ville"];
  $email = $_POST["email"];
  
  // Affiche les valeurs des champs
  echo "Nom: " . $nom . "<br>";
  echo "Prenom: " . $prenom . "<br>";
  echo "Sexe: " . $genre . "<br>";
  echo "Date de naissance: " . $date . "<br>";
  echo "Code Postal: " . $cp . "<br>";
  echo "Adresse: " . $adresse . "<br>";
  echo "Ville: " . $ville . "<br>";
  echo "Email: " . $email . "<br>";
}
?>