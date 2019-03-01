# Projet "Laravel 101" : Bastien, Callista, Rachid

## DESCRIPTIF FONCTIONNELLE
|||||||
|--- |--- |--- |--- |--- |--- |
|Intégrateur|Contrôleur|URL|Template : View (HTML)|Action|Avancement (:green_heart: :yellow_heart: :heart:)|
||show|/connexion|sign-in.blade.php|Afficher formulaire de connexion|:heart:|
||show|/connexion/cree-compte|sign-up.blade.php|Afficher formulaire de creation de compte|:heart:|
||create|/connexion/creer-compte|sign-in.blade.php|Créer nouvel utilisateur dans BDD et affiche confirmation|:heart:|
||show|/mon-compte/{user}|my-account.blade.php|Afficher dashboard|:heart:|
||edit|/mon-compte/{user}/edit|edit-account.blade.php|Afficher formulaire modif compte|:heart:|
||update|/mon-compte/{user}|my-account.blade.php|Maj dashboard|:heart:|
||show|/panier|basket.balde.php|Afficher le contenu du panier|:heart:|
||update|/panier|basket.balde.php|Mette à jour contenu|:heart:|
||destroy|/panier|empty-basket.blade.php|Afficher le message « Panier vide »|:heart:|
|Bastien, Rachid|show|/liste-produits|products-list.blade.php|Affiche la liste des produits|:green_heart:|
|Callista|show|/produit{id.produit}|product-details.blade.php|Affiche détail du produit|:green_heart:|
||create|/commande|confirm-order.blade.php|Créer une nouvelle commande et afficher résumé de la commande|:heart:|
||show|/mon-compte/{user}/commandes|orders-list.blade.php|Affiche la liste des commandes passées et leurs états|:heart:|
||show|/|index.php|Affiche accueil|:yellow_heart:|
