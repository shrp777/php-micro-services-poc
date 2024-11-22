# Architecture Micro Services modèle - PHP (Laravel) + Docker (PoC)

🚨 Ce projet est une preuve de concept 🚨

- [ ] TODO: implémenter le service auth (actuellement fake)

- [ ] TODO: implémenter le service tasks (actuellement fake)

- [ ] TODO: configurer correctement le middleware validateCsrfTokens dans ./auth/service/bootstrap/app.php

- [ ] TODO: configurer correctement le middleware validateCsrfTokens dans ./gateway/service/bootstrap/app.php

- [ ] TODO: configurer correctement le middleware validateCsrfTokens dans ./tasks/service/bootstrap/app.php

## Installations avant de démarrer les conteneurs Docker

Créer les fichiers .env en se basant sur les fichiers .env.example

- ./db-tasks/.env
- ./db-auth/.env
- ./adminer/.env

## Création d'un nouveau service Laravel

Si nécessaire, installer __composer__ en local.

Pour la création d'un nouveau service :

- Créer un dossier portant le nom du service (ex: catalog)
- Se placer dans le dossier du service (ex: catalog)
- Créer un fichier ./nom-du-service/php/local.ini

```ini
display_errors=On
error_reporting=E_ALL
memory_limit=512M
upload_max_filesize=100M
post_max_size=100M
```

- Créer un fichier ./nom-du-service/nginx/nginx.conf
- Adapter la ligne 12 du fichier ./nom-du-service/nginx/nginx.conf en fonction du nom du service Docker (ex, catalog). Laisser le port 9000.

```conf
fastcgi_pass <nom-du-service>:9000;
```

- Depuis le dossier ./nom-du-service créer un projet nouveau projet Laravel nommé "service" avec composer :

```sh
composer create-project --prefer-dist laravel/laravel service
```

Cette commande génère un dossier "service" avec toutes les sources de l'application Laravel.

- Adapter le fichier ./nom-du-service/service/.env en fonction de la connexion à la base de données souhaitée.
- Se placer dans le dossier ./nom-du-service/service
- Créer une clé :

```sh
php artisan key:generate
```

La valeur de la clé sera écrite automatiquement dans le fichier ./nom-du-service/service/.env (ligne 3)

Exemple :

```.env
APP_KEY="base64:tm6gLNls3wJz3QKf1L6L6idTbpZL/NUzzaucHdgQbsM="
```

- Installation de l'extension API :

```sh
php artisan install:api
```

- Vérification de la connexion à la base de données

Depuis le container Docker du service Laravel :

```sh
php artisan migrate:status
```

Chaque service Laravel contient :

- 1 dossier __nginx__ (config nginx)
- 1 dossier __php__ (config php)
- 1 dossier __service__ (application Laravel)

Seul le service Gateway est exposé par NGINX.

## Test

- Gateway : <http://localhost:8888>
- Tasks : <http://localhost:8888/tasks>
- Auth : <http://localhost:8888/auth>

--

!["Logotype Shrp"](https://sherpa.one/images/sherpa-logotype.png)

__Alexandre Leroux__  
_Enseignant / Formateur_  
_Développeur logiciel web & mobile_

Nancy (Grand Est, France)

<https://shrp.dev>
