# Micro Services PHP

## Installation

Créer les fichiers .env :

- ./db/.env
- ./php/.env
- ./adminer/.env

- Adapter les variables d'environnement de ./php/.env en fonction des valeurs de connexion à la base de données.

## Vérification de la connexion à la base de données

- Depuis le container Docker du service Laravel :

```sh
php artisan migrate:status
```

## NGINX

Adapter la ligne 12 du fichier ./nginx/nginx.conf en fonction du nom du service Docker (ici, "tasks").

```conf
fastcgi_pass tasks:9000;
```

--

!["Logotype Shrp"](https://sherpa.one/images/sherpa-logotype.png)

__Alexandre Leroux__  
_Enseignant / Formateur_  
_Développeur logiciel web & mobile_

Nancy (Grand Est, France)

<https://shrp.dev>
