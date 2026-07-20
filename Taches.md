### Version 1
- Creer la database (Noariantsoa)
  - Creer et remplir les tables (membre, categorie, produit, produit_membre, vente)


##### PAGE
  - Login (Diamondra)
      - Fonctions
        - Creer le fonction login (verifi si l'etu est dans la database)
        - Creer la fonction sign_in
      - Affichage
        - Formulaire de login
        - Formulaire d'inscription
      - Code
        - conditions

  - Home (Noariantsoa)
    - Function:
      -get_all_produits : maka tous les produits de chaque etudiant
      -mividy : manala ny quantite de produit (update) ao amin'ny produit_membre, insert les historiques de vente dans la table vente
    -Affichage:
      - boucler dans un tableau
      - bouton pour acheter
      - bouton pour choisir la quantite
    -Page non visible
      -traitement_achat.php :
        -miantso fonction mividy
        -redirect vers home.php

  - Vendre (Diamondra)
    - Function
      - vendre (rajoute une ligne dans le tableau produit_membre)
    - Affichage
      - Formulaire pour choir les produits et la quantite a vendre
    - Code

### Version 2
- Modifiaction de la page vendre
  - pour upload-er des images des plats


##### PAGE
