
# Projet "Laravel 101" : Bastien, Callista, Rachid

## DESCRIPTIF FONCTIONNEL

# Frontend
|Intégrateur|Contrôleur|URL|HTTP|Template : View (HTML)|Action|Avancement (:green_heart: :yellow_heart: :heart:)|
|--- |--- |--- |--- |--- |--- |--- |
||show|/identification||sign-in.blade.php|Afficher les formulaires de connexion et de création de compte|:green_heart:|
|Callista|show|/mon-compte/{user}||my-account.blade.php|Afficher dashboard|:yellow_heart:|
|Callista|edit|/mon-compte/{user}/edit||edit-account.blade.php|Afficher formulaire modif compte|:yellow_heart:|
||update|/mon-compte/{user}||my-account.blade.php|Maj dashboard|:heart:|
|Bastien|show|/panier|get|basket.balde.php|Afficher le contenu du panier|:green_heart:|
|Bastien|store|/panier|post|basket.balde.php|Afficher le contenu du panier|:green_heart:|
|Bastien|update|/panier|put|basket.balde.php|Mette à jour contenu|:green_heart:|
||destroy|/panier|delete|empty-basket.blade.php|Afficher le message « Panier vide »|:heart:|
|Bastien, Rachid|show|/liste-produits||products-list.blade.php|Affiche la liste des produits|:green_heart:|
|Callista|show|/liste-chiots||products-list-pups.blade.php|Affiche la liste des chiots|:green_heart:|
|Callista|show|/produit{id.produit}||product-details.blade.php|Affiche détail du produit|:green_heart:|
||show|/order||confirm-order.blade.php|Créer une nouvelle commande et afficher résumé de la commande|:green_heart:|
||show|/mon-compte/{user}/commandes||orders-list.blade.php|Affiche la liste des commandes passées et leurs états|:heart:|
||show|/||index.php|Affiche accueil|:green_heart:|

# Backend
|Intégrateur|Contrôleur|URL|HTTP|Template : View (HTML)|Action|Avancement (:green_heart: :yellow_heart: :heart:)|
|--- |--- |--- |--- |--- |--- |--- |
||show|/admin|GET|dashboard|Afficher le dashboard|:yellow_heart:|
||list|/admin/liste-produits|GET|admin-products-list|Afficher liste des produits|:green_heart:|
||create|/admin/ajout-produit|GET|admin-product-create|Créer un nouveau produit|:green_heart:|
||store|/admin/liste-produits|POST|admin-products-list|Ajouter un nouveau produit|:green_heart:|
||edit/admin/produit-details/{product}|GET|admin-product-edit|Editer un produit|:green_heart:|
||update|/admin/liste-produits|PUT|admin-products-list|Mettre à jour un produit|:green_heart:|
||destroy|/admin/liste-produits|DELETE|admin-products-list|Supprimer un produit|:green_heart:|
|Rachid|store|/admin/liste-produits/annulation|PUT|admin-products-list|Insérer la modif en bdd|:green_heart:|
|Bastien|index|/admin/commandes|GET|orders-list-bo|Afficher la liste des commandes|:green_heart:|
|Bastien|show|/admin/commandes/{orderId}|GET|orders-details-bo|Afficher les détails d'une commande|:green_heart:|
|Bastien|destroy|/admin/commandes|DELETE|admin-products-list|Supprimer une commande|:green_heart:|