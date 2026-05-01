<?php
// N3aytou lel connexion mta3 l'base de données
require_once '../back/connexion.php';

// Nejbdou les produits lkol mel base
$sql = "SELECT * FROM produits";
$stmt = $pdo->query($sql);
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - Twins R boutique</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h2>Twins R boutique</h2>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="boutique.php" class="active">Boutique</a></li>
                <li><a href="auth.php">Connexion / Inscription</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h2 style="text-align:center; margin-bottom: 20px;">Nos Produits</h2>
        <div class="grille-produits">
            
            <?php foreach($produits as $produit): ?>
            <div class="carte-produit">
                <img src="../images/<?= htmlspecialchars($produit['image']) ?>" alt="<?= htmlspecialchars($produit['nom_produit']) ?>">
                <div class="info-produit">
                    <h3><?= htmlspecialchars($produit['nom_produit']) ?></h3>
                    <p class="prix"><?= htmlspecialchars($produit['prix']) ?> DT</p>
                    
                    <button class="btn-ajout" onclick="ajouterAuPanier(<?= $produit['id'] ?>)">Ajouter au panier</button>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </main>

    <script src="../js/script.js"></script>
</body>
</html>