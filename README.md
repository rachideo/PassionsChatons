
# Projet "Laravel 101" : Bastien, Callista, Rachid

## DESCRIPTIF FONCTIONNEL

# Frontend
|Intégrateur|Contrôleur|URL|HTTP|Template : View (HTML)|Action|Avancement (:green_heart: :yellow_heart: :heart:)|
|--- |--- |--- |--- |--- |--- |--- |
||show|/connexion||sign-in.blade.php|Afficher formulaire de connexion|:heart:|
||show|/connexion/cree-compte||sign-up.blade.php|Afficher formulaire de creation de compte|:heart:|
||create|/connexion/creer-compte||sign-in.blade.php|Créer nouvel utilisateur dans BDD et affiche confirmation|:heart:|
|Callista|show|/mon-compte/{user}||my-account.blade.php|Afficher dashboard|:yellow_heart:|
|Callista|edit|/mon-compte/{user}/edit||edit-account.blade.php|Afficher formulaire modif compte|:yellow_heart:|
||update|/mon-compte/{user}||my-account.blade.php|Maj dashboard|:heart:|
||show|/panier|get|basket.balde.php|Afficher le contenu du panier|:heart:|
||store|/panier|post|basket.balde.php|Afficher le contenu du panier|:heart:|
||update|/panier|put|basket.balde.php|Mette à jour contenu|:heart:|
||destroy|/panier|delete|empty-basket.blade.php|Afficher le message « Panier vide »|:heart:|
|Bastien, Rachid|show|/liste-produits||products-list.blade.php|Affiche la liste des produits|:green_heart:|
|Callista|show|/produit{id.produit}||product-details.blade.php|Affiche détail du produit|:green_heart:|
||create|/commande||confirm-order.blade.php|Créer une nouvelle commande et afficher résumé de la commande|:heart:|
||show|/mon-compte/{user}/commandes||orders-list.blade.php|Affiche la liste des commandes passées et leurs états|:heart:|
||show|/||index.php|Affiche accueil|:yellow_heart:|

# Backend
|Intégrateur|Contrôleur|URL|HTTP|Template : View (HTML)|Action|Avancement (:green_heart: :yellow_heart: :heart:)|
|--- |--- |--- |--- |--- |--- |--- |
||list|/admin/liste-produits|GET|admin-products-list|Afficher formulaire de connexion|:green_heart:|
||create|/admin/liste-produits/create|GET|admin-product-create|Afficher formulaire de connexion|:green_heart:|
||store|/admin/liste-produits|POST|admin-products-list|Afficher formulaire de connexion|:green_heart:|
||edit|/admin/liste-produits/edit|GET|admin-product-edit|Afficher formulaire de connexion|:green_heart:|
||update|/admin/liste-produits|PUT|admin-products-list|Afficher formulaire de connexion|:green_heart:|
||destroy|/admin/liste-produits|DELETE|admin-products-list|Afficher formulaire de connexion|:green_heart:|
