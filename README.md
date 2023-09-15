# Comment faire un projet laravel avec filament

## Processus de Configuration du Projet


### Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :
- [PHP](https://www.php.net/) (version recommandée : 8.1 ou supérieure)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou tout autre système de gestion de base de données de votre choix

### Étapes d'Installation

1. **Clonage du Référentiel** : Clonez le référentiel du projet dans votre répertoire local :
```
   git clone https://github.com/VIA2NEY/faire_un_projet_laravel_avec_filament.git
```

2. **Configuration composer** :Mettre a jour les dependances du projet(Etre dans le repertoire du projet) :
```
composer update
```

3. **Créer le fichier d'environnement':
```
cp .env.example .env
```
Ou cree un fichier .env a la racine du projet et tu copie-colle tout ce qui est dans le .env.example pour le mettre dans le fichier .env crée

4. **Generation de clé** :
```
php artisan key:generate
```

5. **Demarrage du projet** : :
```
php artisan serve
```



Suivre les etapes du fichier Comment faire un projet laravel avec filament.txt pour reporduire et comprendre le principe
