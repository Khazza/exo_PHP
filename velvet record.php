<!-- connect base de données record. -->
<?php
$host = "localhost";
$username = "yourusername";
$password = "yourpassword";
$database = "record";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// requête SQL pour récupérer tous les disques de la table disc :
$sql = "SELECT * FROM disc";
$stmt = $pdo->query($sql);

// Affiche les résultats de la requête sur la page en utilisant une boucle while. 
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$chunks = array_chunk($results, 20); // Diviser les résultats en deux colonnes de 20 éléments chacune

foreach ($chunks as $chunk) {
    echo "<div class='row'>";

    foreach ($chunk as $row) {
        echo "<div class='col-md-6'>";
        echo "<img src='" . $row['disc_picture'] . "' alt='" . $row['disc_title'] . "'><br>";
        echo "<strong>" . $row['disc_title'] . "</strong><br>";
        echo $row['artist_name'] . "<br>";
        echo $row['disc_label'] . " (" . $row['disc_year'] . ")<br>";
        echo $row['disc_genre'] . "<br>";
        echo "<a href='details.php?id=" . $row['disc_id'] . "' class='btn btn-primary'>Détails</a>";
        echo "</div>";
    }

    echo "</div>";
}
?>

<!-- // formulaire d'ajout de disque (add_disc.php) et l'affiche lorsque l'utilisateur clique sur le bouton "ajouter" : -->
<a href="add_disc.php" class="btn btn-success">Ajouter</a>

<!-- // Requête SQL pour insérer un nouveau disque dans la table disc lorsque le formulaire est soumis et exécutez-la : -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $picture = $_POST['picture'];
    $label = $_POST['label'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $artist_id = $_POST['artist_id'];

    $sql = "INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:title, :year, :picture, :label, :genre, :price, :artist_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'title' => $title,
        'year' => $year,
        'picture' => $picture,
        'label' => $label,
        'genre' => $genre,
        'price' => $price,
        'artist_id' => $artist_id
    ]);

    header("Location: discs.php");
}
?>
<!-- // Page de détails (details.php) qui affiche toutes les informations sur un disque en fonction de l'identifiant passé en paramètre : -->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $sql = "SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!$row) {
            echo "Disque non trouvé";
            exit;
        }
    } else {
        echo "Identifiant non fourni";
        exit;
    }
    ?>
    
    <h1><?php echo $row['disc_title']; ?></h1>
    <img src="<?php echo $row['disc_picture']; ?>" alt="<?php echo $row['disc_title']; ?>"><br>
    <strong>Artiste :</strong> <?php echo $row['artist_name']; ?><br>
    <strong>Label :</strong> <?php echo $row['disc_label']; ?><br>
    <strong>Année :</strong> <?php echo $row['disc_year']; ?><br>
    <strong>Genre :</strong> <?php echo $row['disc_genre']; ?><br>
    <strong>Prix :</strong> <?php echo $row['disc_price']; ?> €<br>
    <a href="edit_disc.php?id=<?php echo $row['disc_id']; ?>" class="btn btn-warning">Modifier</a>
    <a href="delete_disc.php?id=<?php echo $row['disc_id']; ?>" class="btn btn-danger">Supprimer</a>

<!-- // Liens pour la modification et la suppression du disque sur la page de détails. Créez les pages correspondantes (edit_disc.php et delete_disc.php) et 
    //  requêtes SQL nécessaires pour mettre à jour ou supprimer le disque en fonction de l'identifiant passé en paramètre. -->
    
    <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM disc WHERE disc_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo "Disque non trouvé";
        exit;
    }
} else {
    echo "Identifiant non fourni";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $picture = $_POST['picture'];
    $label = $_POST['label'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $artist_id = $_POST['artist_id'];

    $sql = "UPDATE disc SET disc_title = :title, disc_year = :year, disc_picture = :picture, disc_label = :label, disc_genre = :genre, disc_price = :price, artist_id = :artist_id WHERE disc_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'title' => $title,
        'year' => $year,
        'picture' => $picture,
        'label' => $label,
        'genre' => $genre,
        'price' => $price,
        'artist_id' => $artist_id,
        'id' => $id
    ]);

    header("Location: details.php?id=$id");
}
?>

<form method="post">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['disc_title']; ?>">
    </div>
    <div class="form-group">
        <label for="year">Année</label>
        <input type="text" class="form-control" id="year" name="year" value="<?php echo $row['disc_year']; ?>">
    </div>
    <div class="form-group">
        <label for="picture">Image</label>
        <input type="text" class="form-control" id="picture" name="picture" value="<?php echo $row['disc_picture']; ?>">
    </div>
    <div class="form-group">
        <label for="label">Label</label>
        <input type="text" class="form-control" id="label" name="label" value="<?php echo $row['disc_label']; ?>">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $row['disc_genre']; ?>">
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['disc_price']; ?>">
    </div>
    <div class="form-group">
        <label for="artist_id">Artiste</label>
        <select class="form-control" id="artist_id" name="artist_id">
            <?php foreach ($artists as $artist) { ?>
                <option value="<?php echo $artist['artist_id']; ?>" <?php if ($artist['artist_id'] == $row['artist_id']) echo 'selected'; ?>><?php echo $artist['artist_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<!-- code pour la page de suppression (delete_disc.php) : -->
<?php
require_once 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM disc WHERE disc_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    header("Location: index.php");
} else {
    echo "Identifiant non fourni";
    exit;
}
?>
<!-- ajouter les liens de modification et de suppression dans la page de détails (details.php) -->
<a href="edit_disc.php?id=<?php echo $row['disc_id']; ?>" class="btn btn-primary">Modifier</a>
<a href="delete_disc.php?id=<?php echo $row['disc_id']; ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce disque ?')">Supprimer</a>


----

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des disques</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Inclusion du fichier CSS personnalisé -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Liste des disques</h1>
    <a href="add_disc.php" class="btn btn-primary">Ajouter</a>

    <div class="container">
        <div class="row">
            <?php
            // Établir une connexion à la base de données
            $pdo = new PDO("mysql:host=localhost;dbname=record", "nom_utilisateur", "mot_de_passe");

            // Requête SQL pour sélectionner tous les enregistrements de la table disc
            $sql = "SELECT * FROM disc";
            $stmt = $pdo->query($sql);

            // Boucle pour afficher les enregistrements
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="<?php echo $row['disc_picture']; ?>" class="card-img-top" alt="Jaquette">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['disc_title']; ?></h5>
                            <p class="card-text">Artiste: <?php echo $row['artist_name']; ?></p>
                            <p class="card-text">Label: <?php echo $row['disc_label']; ?></p>
                            <p class="card-text">Année: <?php echo $row['disc_year']; ?></p>
                            <p class="card-text">Genre: <?php echo $row['disc_genre']; ?></p>
                            <a href="details.php?id=<?php echo $row['disc_id']; ?>" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- Inclusion des scripts Bootstrap et des scripts JS supplémentaires -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Inclusion du fichier JS personnalisé -->
    <script src="script.js"></script>
</body>
</html>

