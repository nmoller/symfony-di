# Symfony DI

Le wiring se fait dans `config/services.yaml`. 

De cette manière, vous avez centralisé l'instantiation et le passage de paramètres
dans le fichier `service.yaml`.


Comme d'habitude
```
docker run --rm --interactive --tty -v ${PWD}:/app \
-u $(id -u):$(id -g) -e COMPOSER_HOME=/app/composer \
-w /app prooph/composer:7.1 install

docker run --rm --interactive --tty -v ${PWD}:/app \
-u $(id -u):$(id -g) -e COMPOSER_HOME=/app/composer \
-w /app prooph/composer:7.1 dump-autoload

docker run --rm --interactive --tty -v ${PWD}:/app \
-u $(id -u):$(id -g) -e COMPOSER_HOME=/app/composer \
-w /app --entrypoint=php prooph/composer:7.1 bin/app.php
```

Si vous etes fatigué:
```
alias dock-comp="docker run --rm --interactive --tty -v ${PWD}:/app \
-u $(id -u):$(id -g) -e COMPOSER_HOME=/app/composer \
-w /app prooph/composer:7.1"

alias dock-php="docker run --rm --interactive --tty -v ${PWD}:/app \
-u $(id -u):$(id -g) -e COMPOSER_HOME=/app/composer \
-w /app --entrypoint=php prooph/composer:7.1"

dock-comp install
dock-comp dump-autoload
dock-php bin/app.php
```

# Unit testing

On implémente une manière simple de tester:
```
dock-php vendor/bin/simple-phpunit -c phpunit.xml tests/Service/TestTest01.php
```