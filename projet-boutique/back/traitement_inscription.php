<?php
// 1. N3aytou lel fichier mta3 l'connexion bech najmou nkalmou l'base
require_once 'connexion.php';

// 2. Nthabtou elli l'formulaire tba3ath b methode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Nلمou les données elli ktebhom l'utilisateur ($_POST)
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // (Optionnel ama profet y7ebbouh) Nchafrou l'mot de passe bech mayot'horch fil base
    $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);

    // 4. N7adhrou l'requête SQL (INSERT kima talbet l'profa)
    $sql = "INSERT INTO utilisateurs (nom, email, mdp) VALUES (:nom, :email, :mdp)";
    $stmt = $pdo->prepare($sql);

    try {
        // 5. Nsobou les données berrasmi fil base
        $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':mdp' => $mdp_hash
        ]);
        
        // Ken kol chay mriguel, nraj3ouh l page l'accueil w n9oloulah bravo
        echo "<script>
                alert('Inscription réussie ! Bienvenue chez Twins R boutique.');
                window.location.href = '../index.php';
              </script>";
        exit();

    } catch(PDOException $e) {
        // Ken fama mochkel (mathalan email m3awed)
        echo "Erreur lors de l'inscription : " . $e->getMessage();
    }
} else {
    // Ken we7ed 7awel yodkhol lel page hethi direct men ghir formulaire
    echo "Accès refusé.";
}
?>