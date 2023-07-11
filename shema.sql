
-- utilisateur

-- porte feuille de l'utilisateur

drop table if exists porte_feuille;

create table porte_feuille(
                              id_porte_feuille int primary key auto_increment,
                              montant float
);

-- transaction sur l'etat du porte feuille de l'utilisateur

drop table if exists transaction_porte_feuille;

create table transaction_porte_feuille(
                                          id_transaction_porte_feuille int primary key auto_increment,
                                          id_porte_feuille int,
                                          date_implementation timestamp,
                                          valeur float,
                                          foreign key(id_porte_feuille)  references porte_feuille(id_porte_feuille)
);

-- table utilisateur

drop table if exists utilisateur;

create table utilisateur (
                             id_utilisateur int primary key auto_increment,
                             nom varchar(50) not null,
                             prenom varchar(50) not null,
                             date_de_naissance timestamp not null,
                             email varchar(50) not null unique,
                             mot_de_passe varchar(50) not null,
                             id_porte_feuille int,
                             foreign key(id_porte_feuille) references porte_feuille(id_porte_feuille)
);

-- table contenant les listes des regimes

drop table if exists regime;

create table regime(
                       id_regime int primary key auto_increment,
                       designation varchar(500)
);

drop table if exists plat;

create table plat(
                     id_plat int primary key auto_increment,
                     designation varchar(255),
                     image_path varchar(500)
);

drop table if exists plat_detail;

create table plat_detail(
                            id_plat_detail int primary key auto_increment,
                            composition varchar(255),
                            image_path varchar(500),
                            id_plat int,
                            foreign key(id_plat) references plat(id_plat)
);

drop table if exists activite;

create table activite(
                         id_activite int primary key auto_increment,
                         designation varchar(255),
                         image_path varchar(500)
);

drop table if exists activite_detail;

create table activite_detail(
                                id_activite_detail int primary key auto_increment,
                                composition varchar(255),
                                image_path varchar(500),
                                id_activite int,
                                foreign key(id_activite) references activite(id_activite)
);

-- tarif de chaque regime

drop table if exists tarif_regime;

create table tarif_regime(
                             id_tarif_regime int primary key auto_increment,
                             date_implementation timestamp,
                             id_regime int,
                             duree int,
                             prix int,
                             foreign key(id_regime) references regime(id_regime)
);

-- effet du regime

drop table if exists effet;

create table effet(
                      id_effet int primary key auto_increment,
                      id_regime int,
                      duree int,
                      poinds float,
                      foreign key(id_regime) references regime(id_regime)
);

drop table if exists r_regime_plat;

create table r_regime_plat(
                              id_regime int,
                              id_plat int,
                              foreign key(id_regime) references regime(id_regime),
                              foreign key(id_plat) references plat(id_plat)
);

drop table if exists r_regime_activite;

create table r_regime_activite(
                                  id_regime int,
                                  id_activite int,
                                  foreign key (id_regime) references regime(id_regime),
                                  foreign key (id_activite) references activite(id_activite)
);

drop table if exists parametres;

create table parametres(
                           id_parametre int primary key auto_increment,
                           designation varchar(255),
                           type_champs varchar(255)
);

drop table if exists parametres_regimes;

create table parametres_regimes(
                                   id_parametre_regime int primary key auto_increment,
                                   id_regime int,
                                   id_parametre int,
                                   intervale_depart float,
                                   intervale_fin float,
                                   foreign key(id_regime) references regime(id_regime),
                                   foreign key(id_parametre) references parametres(id_parametre)
);

drop table if exists details_patient;

create table details_patient(
                                id_details_patient int primary key auto_increment,
                                id_utilisateur int,
                                date_implementation timestamp,
                                id_parametre int,
                                valeur float,
                                foreign key(id_utilisateur) references utilisateur(id_utilisateur),
                                foreign key(id_parametre) references parametres(id_parametre)
);

drop table if exists inscription_regime;

create table inscription_regime(
                                   id_inscription_regime int primary key auto_increment,
                                   id_regime int,
                                   date_regime timestamp,
                                   id_utilisateur int,
                                   duree int,
                                   montant float,
                                   foreign key(id_regime) references regime(id_regime),
                                   foreign key(id_utilisateur) references utilisateur(id_utilisateur)
);

drop table if exists code;

create table code(
                     id_code int primary key auto_increment,
                     code varchar(10) not null unique,
                     montant float
);

drop table if exists administrateur;

create table administrateur (
                                id_administrateur int primary key auto_increment,
                                email varchar(255) unique,
                                mot_de_passe varchar(255)
);

drop table if exists insertion_code;

create table insertion_code(
                               id_insertion_code int primary key auto_increment,
                               id_code int not null,
                               id_utilisateur int not null,
                               etat int not null default 0,
                               date_implementation timestamp default current_timestamp,
                               foreign key(id_code) references code(id_code),
                               foreign key(id_utilisateur) references utilisateur(id_utilisateur)
);

DROP TABLE IF EXISTS REGIME_CONTRAINTE;

CREATE TABLE REGIME_CONTRAINTE (
                                   id_regime_contrain INT PRIMARY KEY AUTO_INCREMENT,
                                   id_regime INT,
                                   id_parametre INT,
                                   contrainte VARCHAR(255),
                                   interval_debut FLOAT,
                                   interval_fin FLOAT,
                                   FOREIGN KEY(id_regime) REFERENCES REGIME(id_regime),
                                   FOREIGN KEY(id_parametre) REFERENCES PARAMETRES(id_parametre),
                                   CONSTRAINT CHK_operation CHECK (operation IN (-1, 0, 1))
);