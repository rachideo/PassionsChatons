# Projet "Laravel 101" : Bastien, Callista, Rachid

## DESCRIPTIF FONCTIONNELLE

|||||||
|--- |--- |--- |--- |--- |--- |
|Intégrateur|Contrôleur|URL|Template : View (HTML)|Action|Avancement|
||show|/connexion|sign-in.blade.php|Afficher formulaire de connexion||
||show|/connexion/cree-compte|sign-up.blade.php|Afficher formulaire de creation de compte||
||create|/connexion/creer-compte|sign-in.blade.php|Créer nouvel utilisateur dans BDD et affiche confirmation||
||show|/mon-compte/{user}|my-account.blade.php|Afficher dashboard||
||edit|/mon-compte/{user}/edit|edit-account.blade.php|Afficher formulaire modif compte||
||update|/mon-compte/{user}|my-account.blade.php|Maj dashboard||
||show|/panier|basket.balde.php|Afficher le contenu du panier||
||update|/panier|basket.balde.php|Mette à jour contenu||
||destroy|/panier|empty-basket.blade.php|Afficher le message « Panier vide »||
||show|/produits|products.blade.php|Affiche la liste des produits||
||show|/produit{id.produit}|product-details.blade.php|Affiche détail du produit||
||create|/commande|confirm-order.blade.php|Créer une nouvelle commande et afficher résumé de la commande||
||show|/mon-compte/{user}/commandes|orders-list.blade.php|Affiche la liste des commandes passées et leurs états||
||show|/|index.php|Affiche accueil||
