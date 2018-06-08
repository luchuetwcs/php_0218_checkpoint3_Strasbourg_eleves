# PHP Checkpoint 3

## Installation du projet
- Clone le dépot [URL]
- Lance un `composer install`
- Remplis les informations dans le *parameters.php*. La base de données à utiliser doit s'appeller impérativement **checkpoint_3**.
- Génère ta base de données avec la commande `php bin/console doctrine:database:create`
- Mets à jour les entités avec `php bin/console doctrine:schema:update --force`
- Lance le projet sur l'url `http://localhost:8000`. Tu dois voir une page présentant le sujet du checkpoint et toutes les instructions à suivre (à la lettre, bien entendu ;-))