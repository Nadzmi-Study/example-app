## System Requirement

- PHP 8.1
- Composer
- Docker

## Installtion
1. Make sure to install Docker Desktop

### Install Without PHP or Composer
Run below command:
```shell
docker run --rm -v <absolute path to project folder>:/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs
```

## Running Application
### With Vscode
1. Run dev container

### Without Vscode
1. Run docker-compose up
