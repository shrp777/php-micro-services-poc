# Micro Services PHP

## Installation

Créer les fichiers .env :

- ./db/.env
- ./php/.env

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
