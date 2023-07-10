DROP DATABASE '48H';

CREATE DATABASE IF NOT EXISTS `48H`;

USE 48H;

-- UTILISATEUR

-- porte feuille de l'utilisateur
 
DROP TABLE IF EXISTS PORTE_FEUILLE;

CREATE TABLE PORTE_FEUILLE(
    id_porte_feuille INT PRIMARY KEY AUTO_INCREMENT,
    montant FLOAT
);

-- transaction sur l'etat du porte feuille de l'utilisateur

DROP TABLE IF EXISTS TRANSACTION_PORTE_FEUILLE;

CREATE TABLE TRANSACTION_PORTE_FEUILLE(
    id_transaction_porte_feuille INT PRIMARY KEY AUTO_INCREMENT,
    id_porte_feuille INT,
    date_implementation TIMESTAMP,
    valeur FLOAT,
    FOREIGN KEY(id_porte_feuille)  REFERENCES PORTE_FEUILLE(id_porte_feuille)
);

-- table utilisateur

DROP TABLE IF EXISTS UTILISATEUR;

CREATE TABLE UTILISATEUR (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    date_de_naissance TIMESTAMP NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(50) NOT NULL,
    id_porte_feuille INT,
    FOREIGN KEY(id_porte_feuille) REFERENCES PORTE_FEUILLE(id_porte_feuille)
);

-- table contenant les listes des regimes

DROP TABLE IF EXISTS REGIME;

CREATE TABLE REGIME(
    id_regime INT PRIMARY KEY AUTO_INCREMENT,
    designation VARCHAR(500)
);

DROP TABLE IF EXISTS PLAT;

CREATE TABLE PLAT(
    id_plat INT PRIMARY KEY AUTO_INCREMENT,
    designation VARCHAR(255),
    image_path VARCHAR(500)
);

DROP TABLE IF EXISTS PLAT_DETAIL;

CREATE TABLE PLAT_DETAIL(
    id_plat_detail INT PRIMARY KEY AUTO_INCREMENT,
    composition VARCHAR(255),
    image_path VARCHAR(500),
    id_plat INT,
    FOREIGN KEY(id_plat) REFERENCES PLAT(id_plat)
);

DROP TABLE IF EXISTS ACTIVITE;

CREATE TABLE ACTIVITE(
    id_ACTIVITE INT PRIMARY KEY AUTO_INCREMENT,
    designation VARCHAR(255),
    image_path VARCHAR(500)
);

DROP TABLE IF EXISTS ACTIVITE_DETAIL;

CREATE TABLE ACTIVITE_DETAIL(
    id_activite_detail INT PRIMARY KEY AUTO_INCREMENT,
    composition VARCHAR(255),
    image_path VARCHAR(500),
    id_activite INT,
    FOREIGN KEY(id_activite) REFERENCES ACTIVITE(id_activite)
);

-- tarif de chaque regime 

DROP TABLE IF EXISTS TARIF_REGIME;

CREATE TABLE TARIF_REGIME(
    id_tarif_regime INT PRIMARY KEY AUTO_INCREMENT,
    date_implementation TIMESTAMP,
    id_regime INT,
    duree INT,
    prix INT,
    FOREIGN KEY(id_regime) REFERENCES REGIME(id_regime)
);

-- effet du regime

DROP TABLE IF EXISTS EFFET;

CREATE TABLE EFFET(
    id_effet INT PRIMARY KEY AUTO_INCREMENT,
    id_regime INT,
    duree INT,
    poinds FLOAT,
    FOREIGN KEY(id_regime) REFERENCES REGIME(id_regime)
);

DROP TABLE IF EXISTS R_REGIME_PLAT;

CREATE TABLE R_REGIME_PLAT(
    id_regime INT,
    id_plat INT,
    FOREIGN KEY(id_regime) REFERENCES REGIME(id_regime),
    FOREIGN KEY(id_plat) REFERENCES PLAT(id_plat)
);

DROP TABLE IF EXISTS R_REGIME_ACTIVITE;

CREATE TABLE R_REGIME_ACTIVITE(
    id_regime INT,
    id_activite INT,
    FOREIGN KEY (id_regime) REFERENCES REGIME(id_regime),
    FOREIGN KEY (id_activite) REFERENCES ACTIVITE(id_activite)
);

DROP TABLE IF EXISTS PARAMETRES;

CREATE TABLE PARAMETRES(
    id_parametre INT PRIMARY KEY AUTO_INCREMENT,
    designation VARCHAR(255),
    type_champs VARCHAR(255)
);

DROP TABLE IF EXISTS PARAMETRES_REGIMES;

CREATE TABLE PARAMETRES_REGIMES(
    id_parametre_regime INT PRIMARY KEY AUTO_INCREMENT,
    id_regime INT,
    id_parametre INT,
    intervale_depart FLOAT,
    intervale_fin FLOAT,
    FOREIGN KEY(id_regime) REFERENCES REGIME(id_regime),
    FOREIGN KEY(id_parametre) REFERENCES PARAMETRES(id_parametre)
);

DROP TABLE IF EXISTS DETAILS_PATIENT;

CREATE TABLE DETAILS_PATIENT(
    id_details_patient INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    date_implementation TIMESTAMP,
    id_parametre INT,
    valeur FLOAT,
    FOREIGN KEY(id_utilisateur) REFERENCES UTILISATEUR(id_utilisateur),
    FOREIGN KEY(id_parametre) REFERENCES PARAMETRES(id_parametre)
);

DROP TABLE IF EXISTS INSCRIPTION_REGIME;

CREATE TABLE INSCRIPTION_REGIME(
    id_inscription_regime INT PRIMARY KEY AUTO_INCREMENT,
    id_regime INT,
    date_regime TIMESTAMP,
    id_utilisateur INT,
    duree INT,
    montant FLOAT,
    FOREIGN KEY(id_regime) REFERENCES REGIME(id_regime),
    FOREIGN KEY(id_utilisateur) REFERENCES UTILISATEUR(id_utilisateur)
);

DROP TABLE IF EXISTS CODE;

CREATE TABLE CODE(
    id_code INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(10) NOT NULL,
    montant FLOAT
);

DROP TABLE IF EXISTS ADMINISTRATEUR;

CREATE TABLE ADMINISTRATEUR (
    id_administrateur INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE,
    mot_de_passe VARCHAR(255)
);