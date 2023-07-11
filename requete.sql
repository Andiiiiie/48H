-- REQUETE POUR OBTENIR LE REGIME AUQUEL ON EST INSCRIT

SELECT R.id_regime id_regime, R.designation designation, I_G.date_regime date_regime, I_G.duree duree, I_G.montant montant FROM
    REGIME R 
        JOIN  INSCRIPTION_REGIME I_G
        ON R.id_regime = I_G.id_regime
    WHERE I_G.id_utilisateur = 1;

-- AFFICHER ETAT ARGENT

SELECT montant FROM PORTE_FEUILLE WHERE id_porte_feuille = 1;

-- OBTENIR PLATS DU REGIME

SELECT R.designation, P_D.composition, P_D.image_path FROM REGIME R 
    JOIN R_REGIME_PLAT R_R_P 
        ON R.id_regime = R_R_P.id_regime 
    JOIN PLAT P 
        ON R_R_P.id_plat = P.id_plat 
    JOIN PLAT_DETAIL P_D 
        ON P.id_plat = P_D.id_plat 
    JOIN INSCRIPTION_REGIME I_G 
        ON R.id_regime = I_G.id_regime 
    WHERE R.id_regime = 1;
    
-- OBTENIR ACTIVITES DU REGIME

SELECT R.designation, A_D.composition, A_D.image_path FROM REGIME R 
    JOIN R_REGIME_ACTIVITE R_R_A 
        ON R.id_regime = R_R_A.id_regime 
    JOIN ACTIVITE A 
        ON R_R_A.id_activite = A.id_activite
    JOIN ACTIVITE_DETAIL A_D 
        ON A.id_activite = A_D.id_activite
    JOIN INSCRIPTION_REGIME I_G 
        ON R.id_regime = I_G.id_regime 
    WHERE R.id_regime = 1;

-- VITESSE D'ACCROISSEMENT DE REGIME

SELECT R.id_regime, R.designation, E.duree, E.poinds, (E.poinds / E.duree) vitesse FROM REGIME R
    JOIN EFFET E 
        ON R.id_regime = E.id_regime
        ORDER BY vitesse DESC;

-- OBTENIR LES REGIMES PAR CONTRAINTE

SELECT * FROM (SELECT D_P.id_utilisateur, R.designation regime_designation, D_P.valeur, C.interval_debut, C.interval_fin, P.designation parametre_designation, R.id_regime, (E.poinds/E.duree) vitesse, count(R.id_regime) nombre FROM REGIME R
    JOIN REGIME_CONTRAINTE C 
        ON R.id_regime = C.id_regime
    JOIN PARAMETRES P
        ON P.id_parametre = C.id_parametre
    JOIN DETAILS_PATIENT D_P
        ON D_P.id_parametre = P.id_parametre
    JOIN EFFET E
        ON E.id_regime = R.id_regime
    WHERE D_P.valeur BETWEEN C.interval_debut AND C.interval_fin group by R.id_regime) AS T
    WHERE T.nombre = (SELECT count(*) FROM PARAMETRES)  AND T.id_utilisateur = 1
    ORDER BY T.vitesse DESC
;
        
-- OBTENIR CONTRAINTE PAR REGIME
SELECT C.interval_debut, C.interval_fin, R.designation, P.designation FROM REGIME R
    JOIN REGIME_CONTRAINTE C 
        ON R.id_regime = C.id_regime
    JOIN PARAMETRES P
        ON P.id_parametre = C.id_parametre;

-- PRIX DU REGIME

( SELECT R.id_regime, R.designation, TR.date_implementation, TR.duree, TR.prix, (E.poinds / E.duree) vitesse FROM REGIME R
    JOIN TARIF_REGIME TR 
        ON R.id_regime = TR.id_regime
    JOIN EFFET E
        ON E.id_regime = R.id_regime
    WHERE R.id_regime = 1 );

( SELECT O.poids_vise FROM OBJECTIF O WHERE id_utilisateur = 1);