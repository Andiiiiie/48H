-- insertion de données dans la table porte_feuille
insert into porte_feuille (montant) values (1000.00);
insert into porte_feuille (montant) values (500.00);
insert into porte_feuille (montant) values (2000.00);

-- insertion de données dans la table transaction_porte_feuille
insert into transaction_porte_feuille (id_porte_feuille, date_implementation, valeur) values (1, now(), 200.00);
insert into transaction_porte_feuille (id_porte_feuille, date_implementation, valeur) values (2, now(), -50.00);
insert into transaction_porte_feuille (id_porte_feuille, date_implementation, valeur) values (1, now(), -100.00);
insert into transaction_porte_feuille (id_porte_feuille, date_implementation, valeur) values (3, now(), 500.00);

-- insertion de données dans la table utilisateur
insert into utilisateur (nom, prenom, date_de_naissance, email, mot_de_passe, id_porte_feuille)
values ('doe', 'john', '1990-01-01', 'john.doe@example.com', 'password123', 1);

insert into utilisateur (nom, prenom, date_de_naissance, email, mot_de_passe, id_porte_feuille)
values ('smith', 'jane', '1985-05-10', 'jane.smith@example.com', 'password456', 2);

insert into utilisateur (nom, prenom, date_de_naissance, email, mot_de_passe, id_porte_feuille)
values ('johnson', 'michael', '1992-07-15', 'michael.johnson@example.com', 'password789', 3);

-- insertion de données dans la table regime
insert into regime (designation) values ('régime 1');
insert into regime (designation) values ('régime 2');
insert into regime (designation) values ('régime 3');

-- insertion de données dans la table plat
insert into plat (designation, image_path) values ('plat 1', '/chemin/vers/image1.jpg');
insert into plat (designation, image_path) values ('plat 2', '/chemin/vers/image2.jpg');
insert into plat (designation, image_path) values ('plat 3', '/chemin/vers/image3.jpg');

-- insertion de données dans la table plat_detail
insert into plat_detail (composition, image_path, id_plat) values ('composition plat 1', '/chemin/vers/image1.jpg', 1);
insert into plat_detail (composition, image_path, id_plat) values ('composition plat 2', '/chemin/vers/image2.jpg', 2);
insert into plat_detail (composition, image_path, id_plat) values ('composition plat 3', '/chemin/vers/image3.jpg', 3);

-- insertion de données dans la table activite
insert into activite (designation, image_path) values ('activité 1', '/chemin/vers/image1.jpg');
insert into activite (designation, image_path) values ('activité 2', '/chemin/vers/image2.jpg');
insert into activite (designation, image_path) values ('activité 3', '/chemin/vers/image3.jpg');

-- insertion de données dans la table activite_detail
insert into activite_detail (composition, image_path, id_activite) values ('composition activité 1', '/chemin/vers/image1.jpg', 1);
insert into activite_detail (composition, image_path, id_activite) values ('composition activité 2', '/chemin/vers/image2.jpg', 2);
insert into activite_detail (composition, image_path, id_activite) values ('composition activité 3', '/chemin/vers/image3.jpg', 3);

-- insertion de données dans la table tarif_regime
insert into tarif_regime (date_implementation, id_regime, duree, prix) values (now(), 1, 30, 100);
insert into tarif_regime (date_implementation, id_regime, duree, prix) values (now(), 2, 60, 200);
insert into tarif_regime (date_implementation, id_regime, duree, prix) values (now(), 3, 90, 300);

-- insertion de données dans la table effet
insert into effet (id_regime, duree, poinds) values (1, 30, 2.5);
insert into effet (id_regime, duree, poinds) values (2, 60, 3.0);
insert into effet (id_regime, duree, poinds) values (3, 90, 2.0);

-- insertion de données dans la table r_regime_plat
insert into r_regime_plat (id_regime, id_plat) values (1, 1);
insert into r_regime_plat (id_regime, id_plat) values (2, 2);
insert into r_regime_plat (id_regime, id_plat) values (3, 3);

-- insertion de données dans la table r_regime_activite
insert into r_regime_activite (id_regime, id_activite) values (1, 1);
insert into r_regime_activite (id_regime, id_activite) values (2, 2);
insert into r_regime_activite (id_regime, id_activite) values (3, 3);

-- insertion de données dans la table parametres
insert into parametres (designation, type_champs) values ('pois', 'number');
insert into parametres (designation, type_champs) values ('age', 'number');

-- insertion de données dans la table parametres_regimes
insert into parametres_regimes (id_regime, id_parametre, intervale_depart, intervale_fin) values (1, 1, 0.5, 1.5);
insert into parametres_regimes (id_regime, id_parametre, intervale_depart, intervale_fin) values (2, 2, 1.0, 2.0);

-- insertion de données dans la table details_patient
insert into details_patient (id_utilisateur, date_implementation, id_parametre, valeur) values (1, now(), 1, 1.2);
insert into details_patient (id_utilisateur, date_implementation, id_parametre, valeur) values (2, now(), 2, 2.5);

-- insertion de données dans la table inscription_regime
insert into inscription_regime (date_regime, id_regime, id_utilisateur, duree, montant) values (now(), 1, 1, 30, 100);
insert into inscription_regime (date_regime, id_regime, id_utilisateur, duree, montant) values (now(), 2, 2, 60, 200);
insert into inscription_regime (date_regime, id_regime, id_utilisateur, duree, montant) values (now(), 3, 3, 90, 300);


-- insertion de données dans la table administrateur
insert into administrateur (email, mot_de_passe) values ('admin@example.com', 'admin123');

insert into code(code, montant) values ('code1', 100);
insert into code(code, montant) values ('code2', 200);
insert into code(code, montant) values ('code3', 300);

