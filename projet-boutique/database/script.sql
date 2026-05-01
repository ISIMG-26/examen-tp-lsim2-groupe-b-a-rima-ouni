-- 1. Table des utilisateurs (pour l'inscription et connexion)
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Table des catégories (pour lier avec les produits)
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) NOT NULL
);

-- 3. Table des produits (liée à la table catégories)
CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_produit VARCHAR(100) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES categories(id) ON DELETE SET NULL
);

-- 4. Ajouter quelques données de test (Catégories et Produits)
INSERT INTO categories (nom_categorie) VALUES 
('Homme'), 
('Femme'), 
('Enfant');

INSERT INTO produits (nom_produit, prix, image, id_categorie) VALUES 
('T-shirt Noir Basique', 35.00, 'tshirt.jpg', 1),
('Jeans Bleu Classique', 89.00, 'jeans.jpg', 2);