# Project

- Laravel 8.83.27 
- PHP 7.4.32
- Apache 
- MySQL 5.7.39
- Bootstrap 5
- Adminer
- Docker

## Запуск

### Первый запуск

    docker-compose build    

### Не первый запуск

    docker-compose up -d
    # или
    docker-compose start

> Проверка в браузере

    127.0.0.1:8080
    127.0.0.1:8080/adminer.php

> Вход в БД
 
    db, root, 123
    // на основе docker-compose.yml

## Log in to the docker container

Вход в контейнер (не работает в GitBash, работает в cmd)

    cd /d E:\
    cd develop_train\dockerphp\my_folder
    dir
    docker ps
    docker exec -it container_id bash

    // при необходимости
    apt-get install nano

## Остановка контейнеров

    docker-compose stop