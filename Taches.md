### Version 1
- Creer la database (4705)
  - Creer et remplir les tables (membre, categorie, produit, produit_membre, vente)


##### PAGE
  - Login (4932)
      - Fonctions
        - Creer le fonction login (verifi si l'etu est dans la database)
        - Creer la fonction sign_in
      - Affichage
        - Formulaire de login
        - Formulaire d'inscription
      - Code
        - conditions

  - Home (4705)
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

  - Vendre (4932)
    - Function
      - vendre (rajoute une ligne dans le tableau produit_membre)
    - Affichage
      - Formulaire pour choir les produits et la quantite a vendre
    - Code

### Version 2
- Modifiaction de la page vendre (4932)
  - pour upload-er des images des plats


##### PAGE
  - Statistiques (4932)
    - Par produit 
      - Affichage
        - tableau des categories et produits
  
    - Par membre
      - Affichage
        - Tableau des membres et leurs ventes
    - Fonction
      - Creer la fonction get_montant_categories


  - Modifier ou ajouter produit (modifier.php)   (4705)
    - Affichage:
      -creation de formulaire pour les tables a modifier
      - faire apparaitre different selon l'option choisi : modifier ou ajouter
    -fonction :
      - fonction update table pour ajouter les modifications
      - fonction insert dans la table pour ajouter
    -traitement :
      -appelle les fonction de modification et redirect vers home.php


### CSS  (4705)
- creation du fichier style.css
- mettre le lien css dans toutes les pages visibles
- ajout des div et class necessaire dans chaque page