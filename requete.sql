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