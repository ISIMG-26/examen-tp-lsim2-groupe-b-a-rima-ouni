<?php
// Hetha fichier mayetshafech fil navigateur, ykallem fih l'AJAX fil kfè
if (isset($_POST['id_produit'])) {
    $id = $_POST['id_produit'];
    
    // Houni normalment nsajlouh fil session wela table 'panier'
    // Ama bech nbasat'houha, bech nraj3ou juste message de succès b format JSON
    $reponse = [
        "status" => "success",
        "message" => "Le produit numéro $id a été ajouté au panier avec succès !"
    ];
    
    echo json_encode($reponse);
} else {
    echo json_encode(["status" => "error", "message" => "Aucun produit reçu."]);
}
?>