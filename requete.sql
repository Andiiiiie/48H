-- REQUETE POUR OBTENIR LE REGIME AUQUEL ON EST INSCRIT
SELECT R.id_regime id_regime, R.designation designation, I_G.date_regime date_regime, I_G.duree duree, I_G.montant montant FROM
    REGIME R 
        JOIN  INSCRIPTION_REGIME I_G
        ON R.id_regime = I_G.id_regime
    WHERE I_G.id_utilisateur = 1;

-- AFFICHER ETAT ARGENT
SELECT montant FROM PORTE_FEUILLE WHERE id_porte_feuille = 1;