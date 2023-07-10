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

-- Insertion de données dans la table REGIME
INSERT INTO REGIME (designation) VALUES ('Régime 1');
INSERT INTO REGIME (designation) VALUES ('Régime 2');
INSERT INTO REGIME (designation) VALUES ('Régime 3');

-- Insertion de données dans la table PLAT
INSERT INTO PLAT (designation, image_path) VALUES ('Plat 1', '/chemin/vers/image1.jpg');
INSERT INTO PLAT (designation, image_path) VALUES ('Plat 2', '/chemin/vers/image2.jpg');
INSERT INTO PLAT (designation, image_path) VALUES ('Plat 3', '/chemin/vers/image3.jpg');

-- Insertion de données dans la table PLAT_DETAIL
INSERT INTO PLAT_DETAIL (composition, image_path) VALUES ('Composition plat 1', '/chemin/vers/image1.jpg');
INSERT INTO PLAT_DETAIL (composition, image_path) VALUES ('Composition plat 2', '/chemin/vers/image2.jpg');
INSERT INTO PLAT_DETAIL (composition, image_path) VALUES ('Composition plat 3', '/chemin/vers/image3.jpg');

-- Insertion de données dans la table ACTIVITE
INSERT INTO ACTIVITE (designation, image_path) VALUES ('Activité 1', '/chemin/vers/image1.jpg');
INSERT INTO ACTIVITE (designation, image_path) VALUES ('Activité 2', '/chemin/vers/image2.jpg');
INSERT INTO ACTIVITE (designation, image_path) VALUES ('Activité 3', '/chemin/vers/image3.jpg');

-- Insertion de données dans la table ACTIVITE_DETAIL
INSERT INTO ACTIVITE_DETAIL (composition, image_path) VALUES ('Composition activité 1', '/chemin/vers/image1.jpg');
INSERT INTO ACTIVITE_DETAIL (composition, image_path) VALUES ('Composition activité 2', '/chemin/vers/image2.jpg');
INSERT INTO ACTIVITE_DETAIL (composition, image_path) VALUES ('Composition activité 3', '/chemin/vers/image3.jpg');

-- Insertion de données dans la table TARIF_REGIME
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 1, 30, 100);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 2, 60, 200);
INSERT INTO TARIF_REGIME (date_implementation, id_regime, duree, prix) VALUES (NOW(), 3, 90, 300);

-- Insertion de données dans la table EFFET
INSERT INTO EFFET (id_regime, duree, poinds) VALUES (1, 30, 2.5);
INSERT INTO EFFET (id_regime, duree, poinds) VALUES (2, 60, 3.0);
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
INSERT INTO PARAMETRES (designation, type_champs) VALUES ('Paramètre 1', 'Type 1');
INSERT INTO PARAMETRES (designation, type_champs) VALUES ('Paramètre 2', 'Type 2');
INSERT INTO PARAMETRES (designation, type_champs) VALUES ('Paramètre 3', 'Type 3');

-- Insertion de données dans la table PARAMETRES_REGIMES
INSERT INTO PARAMETRES_REGIMES (id_regime, id_parametre, intervale_depart, intervale_fin) VALUES (1, 1, 0.5, 1.5);
INSERT INTO PARAMETRES_REGIMES (id_regime, id_parametre, intervale_depart, intervale_fin) VALUES (2, 2, 1.0, 2.0);
INSERT INTO PARAMETRES_REGIMES (id_regime, id_parametre, intervale_depart, intervale_fin) VALUES (3, 3, 0.8, 1.2);

-- Insertion de données dans la table DETAILS_PATIENT
INSERT INTO DETAILS_PATIENT (id_utilisateur, date_implementation, id_parametre, valeur) VALUES (1, NOW(), 1, 1.2);
INSERT INTO DETAILS_PATIENT (id_utilisateur, date_implementation, id_parametre, valeur) VALUES (2, NOW(), 2, 2.5);
INSERT INTO DETAILS_PATIENT (id_utilisateur, date_implementation, id_parametre, valeur) VALUES (3, NOW(), 3, 0.9);

-- Insertion de données dans la table INSCRIPTION_REGIME
INSERT INTO INSCRIPTION_REGIME (date_regime, id_utilisateur, duree, montant) VALUES (NOW(), 1, 30, 100);
INSERT INTO INSCRIPTION_REGIME (date_regime, id_utilisateur, duree, montant) VALUES (NOW(), 2, 60, 200);
INSERT INTO INSCRIPTION_REGIME (date_regime, id_utilisateur, duree, montant) VALUES (NOW(), 3, 90, 300);

-- Insertion de données dans la table ADMINISTRATEUR
INSERT INTO ADMINISTRATEUR (email, mot_de_passe) VALUES ('admin@example.com', 'admin123');