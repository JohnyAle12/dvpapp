<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Project

This is a graphql api where i put some knowledges about laravel framework, here i build a basic graphql service when you can execute a crud operations with two entities users and tickets. For this project i'm using strong typing, dependency injection, POO, clean code, SOLID principles among others goods practices.

## Start Project

Before you download project, please run:

```bash
# install vendor packages
$ composer install
```

Then build the docker container, please run:

```bash
# install vendor packages
$ docker-compose up -d
```

Make sure configure your .env file according your database enviroment or docker-compose file:

To migrate the database and create it with fake data, please run:

```bash
# run migrations with seeders
$ composer artisan migrate:fresh -- --seed
```

For generate the new application key

```bash
# generat new key aplication on the .env file
$ composer artisan key:generate
```

After that, you can see the application in local environment with this url http://localhost:8888/

Also this application has installed a graphql client to consume the api, you can see it at this url http://localhost:8888/graphql-playground
