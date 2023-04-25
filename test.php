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