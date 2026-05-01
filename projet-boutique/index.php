<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twins R Boutique - Boutique de Vêtements</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="logo">
            <h2>Twins R Boutique</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Accueil</a></li>
                <li><a href="html/boutique.php">Boutique</a></li>
                <li><a href="html/auth.php">Connexion / Inscription</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Nouvelle Collection Printemps</h1>
            <p>Découvrez nos vêtements tendances à des prix imbattables.</p>
        </section>

        <section class="produits-vedettes">
            <h2>Nos meilleures ventes</h2>
            <div class="grid-produits" id="liste-produits">
                
                <article class="carte-produit">
                    <img src="images/tshirt-noir.jpg" alt="T-shirt Noir Basique">
                    <div class="info-produit">
                        <h3>T-shirt Noir Basique</h3>
                        <p class="prix">35.00 TND</p>
                       <a href="html/boutique.php" class="btn-ajout" style="text-decoration:none; display:inline-block; text-align:center;">Voir dans la boutique</a>
                    </div>
                </article>

                <article class="carte-produit">
                    <img src="images/jeans-bleu.jpg" alt="Jeans Bleu Coupe Droite">
                    <div class="info-produit">
                        <h3>Jeans Bleu Classique</h3>
                        <p class="prix">89.00 TND</p>
                        <a href="html/boutique.php" class="btn-ajout" style="text-decoration:none; display:inline-block; text-align:center;">Voir dans la boutique</a>
                    </div>
                </article>

            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Twins R Boutique - Mini-projet LSIM 2. Tous droits réservés.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>