// On attend que la page soit complètement chargée
document.addEventListener("DOMContentLoaded", function() {
    
    // On sélectionne le formulaire d'inscription
    const formInscription = document.getElementById('form-inscription');

    // On vérifie si le formulaire existe sur la page actuelle
    if (formInscription) {
        formInscription.addEventListener('submit', function(event) {
            
            // On récupère les valeurs des champs
            const nom = document.getElementById('nom').value.trim();
            const email = document.getElementById('email').value.trim();
            const mdp = document.getElementById('mdp').value.trim();

            // On récupère les zones pour afficher les erreurs
            const erreurNom = document.getElementById('erreur-nom');
            const erreurEmail = document.getElementById('erreur-email');
            const erreurMdp = document.getElementById('erreur-mdp');

            // On réinitialise les messages d'erreur
            erreurNom.style.display = 'none';
            erreurEmail.style.display = 'none';
            erreurMdp.style.display = 'none';

            let formulaireValide = true;

            // 1. Validation du Nom
            if (nom === "") {
                erreurNom.textContent = "Veuillez saisir votre nom.";
                erreurNom.style.display = 'block';
                formulaireValide = false;
            }

            // 2. Validation de l'Email
            if (email === "") {
                erreurEmail.textContent = "Veuillez saisir votre adresse email.";
                erreurEmail.style.display = 'block';
                formulaireValide = false;
            } else if (!email.includes('@') || !email.includes('.')) {
                erreurEmail.textContent = "Veuillez saisir une adresse email valide.";
                erreurEmail.style.display = 'block';
                formulaireValide = false;
            }

            // 3. Validation du Mot de passe
            if (mdp.length < 6) {
                erreurMdp.textContent = "Le mot de passe doit contenir au moins 6 caractères.";
                erreurMdp.style.display = 'block';
                formulaireValide = false;
            }

            // Si le formulaire n'est pas valide, on empêche l'envoi (le rechargement de la page)
            if (!formulaireValide) {
                event.preventDefault(); 
            }
        });
    }
});
// ==========================================
// PARTIE 1 : Validation mta3 l'inscription
// ==========================================
document.addEventListener("DOMContentLoaded", function() {
    const formInscription = document.getElementById('form-inscription');
    
    if (formInscription) {
        formInscription.addEventListener('submit', function(event) {
            // ... (L'code le9dim mta3 l'validation lkol) ...
        });
    }
}); // <--- HETHI L'ACCOLADE LEKHRA MTA3 L'CODE LEQDIM



// ==========================================
// PARTIE 2 : AJAX mta3 l'Ajout au panier
// ==========================================
// Lazemha tkoun houni, lbarra jemla :

function ajouterAuPanier(idProduit) {
    let formData = new FormData();
    formData.append('id_produit', idProduit);

    fetch('../back/ajout_panier.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success') {
            alert(data.message + " (Test AJAX réussi \u2705)");
        } else {
            alert("Erreur lors de l'ajout.");
        }
    })
    .catch(error => {
        console.error('Erreur AJAX:', error);
    });
}