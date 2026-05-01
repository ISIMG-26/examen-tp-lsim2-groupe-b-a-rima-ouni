<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion / Inscription - Twins R Boutique</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        <div class="logo">
            <h2>Twins R Boutique</h2>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="boutique.php">Boutique</a></li>
                <li><a href="auth.php" class="active">Connexion / Inscription</a></li>
            </ul>
        </nav>
    </header>

    <main class="container-auth">
        <section class="form-section">
            <h2>Créer un compte</h2>
            <form id="form-inscription" action="../back/traitement_inscription.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom">
                    <span class="erreur-msg" id="erreur-nom"></span>
                </div>

                <div class="form-group">
                    <label for="email">Adresse Email *</label>
                    <input type="email" id="email" name="email" placeholder="exemple@email.com">
                    <span class="erreur-msg" id="erreur-email"></span>
                </div>

                <div class="form-group">
                    <label for="mdp">Mot de passe *</label>
                    <input type="password" id="mdp" name="mdp" placeholder="Minimum 6 caractères">
                    <span class="erreur-msg" id="erreur-mdp"></span>
                </div>

                <button type="submit" class="btn-ajout">S'inscrire</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Twins R Boutique - Mini-projet LSIM 2. Tous droits réservés.</p>
    </footer>

    <script src="../js/script.js"></script>
</body>
</html>