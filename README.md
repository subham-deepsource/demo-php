# Demo repository - PHP
This repository demonstrates sample issues in PHP code raised by DeepSource.

## Installation

```sh
git clone git@github.com:ishan-deepsource/php-dummy-app.git
cd php-dummy-app
composer install
```

## Run PHP Codesniffer

```sh
./vendor/bin/phpcs --standard=PSR12 src/
```

## Run PHPStan checks

```sh
vendor/bin/phpstan analyse src
```
