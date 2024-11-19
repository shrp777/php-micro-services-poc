# Micro Services PHP

## Installation avant de démarrer les conteneurs Docker

Si nécessaire, installer __composer__ en local.

Créer un projet Laravel, ou utiliser le projet existant : Tasks (./tasks) :

```sh
composer create-project --prefer-dist laravel/laravel <nom du projet>
```

Créer une clé pour l'application Laravel, depuis la machine locale en se plaçant dans le dossier du projet Laravel

```sh
php artisan key:generate
```

La valeur sera écrite dans le fichier <nom-du-service>/.env (ligne 3)

```.env
APP_KEY="base64:tm6gLNls3wJz3QKf1L6L6idTbpZL/NUzzaucHdgQbsM="
```

Créer les fichiers .env :

- ./db-tasks/.env
- ./db-auth/.env
- ./php/.env
- ./adminer/.env

- Adapter les variables d'environnement de ./tasks/.env en fonction des valeurs de connexion à la base de données.

## Vérification de la connexion à la base de données

- Depuis le container Docker du service Laravel :

```sh
php artisan migrate:status
```

## NGINX

Seul le service Gateway est exposé par NGINX.

Adapter la ligne 12 du fichier ./nginx/nginx.conf en fonction du nom du service Docker (ici, "gateway").

```conf
fastcgi_pass gateway:9000;
```

--

!["Logotype Shrp"](https://sherpa.one/images/sherpa-logotype.png)

__Alexandre Leroux__  
_Enseignant / Formateur_  
_Développeur logiciel web & mobile_

Nancy (Grand Est, France)

<https://shrp.dev>
