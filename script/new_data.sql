-- Insertion de données dans la table PORTE_FEUILLE
INSERT INTO PORTE_FEUILLE (montant) VALUES (1000.00);
INSERT INTO PORTE_FEUILLE (montant) VALUES (500.00);
INSERT INTO PORTE_FEUILLE (montant) VALUES (2000.00);

-- Insertion de données dans la table TRANSACTION_PORTE_FEUILLE
INSERT INTO TRANSACTION_PORTE_FEUILLE (id_porte_feuille, date_implementation, valeur) VALUES (1, NOW(), 200.00);
INSERT INTO TRANSACTION_PORTE_FEUILLE (id_porte_feuille, date_implementation, valeur) VALUES (2, NOW(), -50.00);
INSERT INTO TRANSACTION_PORTE_FEUILLE (id_porte_feuille, date_implementation, valeur) VALUES (1, NOW(), -100.00);
INSERT INTO TRANSACTION_PORTE_FEUILLE (id_porte_feuille, date_implementation, valeur) VALUES (3, NOW(), 500.00);

-- Insertion de données dans la table UTILISATEUR
INSERT INTO UTILISATEUR (nom, prenom, date_de_naissance, email, mot_de_passe, id_porte_feuille)
VALUES ('Doe', 'John', '1990-01-01', 'john.doe@example.com', 'password123', 1);

INSERT INTO UTILISATEUR (nom, prenom, date_de_naissance, email, mot_de_passe, id_porte_feuille)
VALUES ('Smith', 'Jane', '1985-05-10', 'jane.smith@example.com', 'password456', 2);

INSERT INTO UTILISATEUR (nom, prenom, date_de_naissance, email, mot_de_passe, id_porte_feuille)
VALUES ('Johnson', 'Michael', '1992-07-15', 'michael.johnson@example.com', 'password789', 3);

-- INSERTION DES TYPES

INSERT INTO TYPES (designation, remise, prix) VALUES ('Gold', 15, 10);
INSERT INTO TYPES (designation, remise, prix) VALUES ('Normal', 0, 0);


-- INSERTION DANS TYPE_UTILISATEUR

INSERT INTO TYPE_UTILISATEUR (id_utilisateur, id_type, date_implementation) VALUES (1, 1, NOW());
INSERT INTO TYPE_UTILISATEUR (id_utilisateur, id_type, date_implementation) VALUES (2, 2, NOW());
INSERT INTO TYPE_UTILISATEUR (id_utilisateur, id_type, date_implementation) VALUES (3, 1, NOW());

-- Insertion de données dans la table REGIME
INSERT INTO REGIME (designation, image_path) VALUES ('Régime spécial sans sucre', 'regime1');
INSERT INTO REGIME (designation, image_path) VALUES ('Régime moderne sans gluten', 'regime2');
INSERT INTO REGIME (designation, image_path) VALUES ('Régime classique sans lactose', 'regime3');

-- Insertion de données dans la table PLAT
INSERT INTO PLAT (designation, image_path) VALUES ('Bambou', '/chemin/vers/image1.jpg');
INSERT INTO PLAT (designation, image_path) VALUES ('Frommage', '/chemin/vers/image2.jpg');
INSERT INTO PLAT (designation, image_path) VALUES ('Viande', '/chemin/vers/image3.jpg');

-- Insertion de données dans la table PLAT_DETAIL
INSERT INTO PLAT_DETAIL (composition, image_path, id_plat) VALUES ('Sucre', '/chemin/vers/image1.jpg', 1);
INSERT INTO PLAT_DETAIL (composition, image_path, id_plat) VALUES ('Lait', '/chemin/vers/image2.jpg', 2);
INSERT INTO PLAT_DETAIL (composition, image_path, id_plat) VALUES ('Poulet', '/chemin/vers/image3.jpg', 3);

-- Insertion de données dans la table ACTIVITE
INSERT INTO ACTIVITE (designation, image_path) VALUES ('Natation', '/chemin/vers/image1.jpg');
INSERT INTO ACTIVITE (designation, image_path) VALUES ('Basket-ball', '/chemin/vers/image2.jpg');
INSERT INTO ACTIVITE (designation, image_path) VALUES ('Foot-ball', '/chemin/vers/image3.jpg');
000000000
-- Insertion de données dans la table ACTIVITE_DETAIL
INSERT INTO ACTIVITE_DETAIL (composition, image_path, id_activite) VALUES ('1 heure piscine municipale', '/chemin/vers/image1.jpg', 1);
INSERT INTO ACTIVITE_DETAIL (composition, image_path, id_activite) VALUES ('Programme entrainement maitre joky', '/chemin/vers/image2.jpg', 2);
INSERT INTO ACTIVITE_DETAIL (composition, image_path, id_activite) VALUES ('Kyliam Mbappé', '/chemin/vers/image3.jpg', 3);

-- Insertion de données dans la table TARIF_REGIME
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 1, 300, 100);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 2, 300, 200);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 3, 300, 300);

INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 1, 1000, 500);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 2, 1000, 900);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 3, 1000, 1000);

INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 1, 5000, 500);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 2, 5000, 900);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 3, 5000, 1000);

-- Insertion de données dans la table EFFET
INSERT INTO EFFET (id_regime, duree, poinds) VALUES (1, 30, 2.5);
INSERT INTO EFFET (id_regime, duree, poinds) VALUES (2, 60, -3.0);
INSERT INTO EFFET (id_regime, duree, poinds) VALUES (3, 90, 2.0);

-- Insertion de données dans la table R_REGIME_PLAT
INSERT INTO R_REGIME_PLAT (id_regime, id_plat) VALUES (1, 1);
INSERT INTO R_REGIME_PLAT (id_regime, id_plat) VALUES (2, 2);
INSERT INTO R_REGIME_PLAT (id_regime, id_plat) VALUES (3, 3);

-- Insertion de données dans la table R_REGIME_ACTIVITE
INSERT INTO R_REGIME_ACTIVITE (id_regime, id_activite) VALUES (1, 1);
INSERT INTO R_REGIME_ACTIVITE (id_regime, id_activite) VALUES (2, 2);
INSERT INTO R_REGIME_ACTIVITE (id_regime, id_activite) VALUES (3, 3);

-- Insertion de données dans la table PARAMETRES
INSERT INTO PARAMETRES (designation, type_champs) VALUES ('Pois', 'number');
INSERT INTO PARAMETRES (designation, type_champs) VALUES ('Taille', 'number');

INSERT INTO REGIME_CONTRAINTE (id_regime, id_parametre, contrainte, interval_debut, interval_fin) VALUES (1, 1, 'Your heigh must be between 20 and 50', 20, 50);
INSERT INTO REGIME_CONTRAINTE (id_regime, id_parametre, contrainte, interval_debut, interval_fin) VALUES (1, 2, 'Your age must be between 15 and 40', 15, 40);

INSERT INTO REGIME_CONTRAINTE (id_regime, id_parametre, contrainte, interval_debut, interval_fin) VALUES (2, 1, 'To pursache your height must be heigher', 50, 90);
INSERT INTO REGIME_CONTRAINTE (id_regime, id_parametre, contrainte, interval_debut, interval_fin) VALUES (2, 2, 'To pursache your height must be heigher', 40, 50);

INSERT INTO REGIME_CONTRAINTE (id_regime, id_parametre, contrainte, interval_debut, interval_fin) VALUES (3, 2, 'To pursache your height must be heigher', 0, 100);
INSERT INTO REGIME_CONTRAINTE (id_regime, id_parametre, contrainte, interval_debut, interval_fin) VALUES (3, 2, 'To pursache your height must be heigher', 0, 100);

-- Insertion de données dans la table PARAMETRES_REGIMES
INSERT INTO PARAMETRES_REGIMES (id_regime, id_parametre, intervale_depart, intervale_fin) VALUES (1, 1, 40, 50);
INSERT INTO PARAMETRES_REGIMES (id_regime, id_parametre, intervale_depart, intervale_fin) VALUES (2, 2, 30, 60);

-- Insertion de données dans la table INSCRIPTION_REGIME

---INSERT INTO INSCRIPTION_REGIME (date_regime, id_regime, id_utilisateur, duree, montant) VALUES (NOW(), 1, 1, 30, 100);
---INSERT INTO INSCRIPTION_REGIME (date_regime, id_regime, id_utilisateur, duree, montant) VALUES (NOW(), 2, 2, 60, 200);
---INSERT INTO INSCRIPTION_REGIME (date_regime, id_regime, id_utilisateur, duree, montant) VALUES (NOW(), 3, 3, 90, 300);

-- Insertion de données dans la table ADMINISTRATEUR
INSERT INTO ADMINISTRATEUR (email, mot_de_passe) VALUES ('admin@example.com', 'admin123');

INSERT INTO CODE(code, montant) VALUES ('CODE1', 100);
INSERT INTO CODE(code, montant) VALUES ('CODE2', 200);
INSERT INTO CODE(code, montant) VALUES ('CODE3', 300);