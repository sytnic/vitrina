# Beyond the code

## Log in to the docker container

Вход в контейнер (не работает в GitBash, работает в cmd)

    cd /d E:\
    cd develop_train\dockerphp\my_folder
    dir
    docker ps
    docker exec -it container_id bash

    // при необходимости
    apt-get install nano


## Creating controllers, models

https://docs.laravel-excel.com/3.1/imports/

    php artisan make:import ProductsImport --model=Product

    php artisan make:model Product

    php artisan make:controller ProductsController

---

Не обязательно создавать новую миграцию, если она понадобилась.
Можно внести имзенения в старую миграцию и откатить изменения.  
https://laravel.su/docs/8.x/migrations#rolling-back-migrations

    php artisan migrate:status

Откатить последнюю миграцию

    php artisan migrate:rollback --step=1
    // Method down() works:
    // Schema::dropIfExists('table');

    php artisan migrate:status

Запустить заново (затронуты будут только незапущенные миграции, No Ran)

    php artisan migrate

---

Тестовый контроллер. Не имеет связи с моделью.

    php artisan make:controller RestTestController --resource

Ресурсный контроллер. Имеет связь с моделью.

    php artisan make:controller ProductsController --model=Product

Ресурсным его делает запись --model= согласно 

    php artisan make:controller --help

---

## Перед выкладыванием: 

https://itproger.com/course/laravel/8  
https://www.youtube.com/watch?v=d-99IlvUuJw

Подготовка нового .env в разделах APP и DB

Возможно, потребуется подготовка нового .htaccess с перекладыванием на папку вверх, а также изменение путей js и css в resources\views\layouts\app.blade.php,  
но всё это не понадобилось.

Новый ключ

    php artisan key:generate

Отработка кэша

    php artisan config:cache

А также (во избежание ошибок прав доступа):

> удаление файлов storage/log/*.log

> удаление bootstrap/cahe/config.php

Не понадобилось выкладывание /node_modules и /dbfiles .

---

## SSH

https://2domains.ru/support/hosting/rabota-po-ssh


## Git

https://2domains.ru/support/hosting/nastroyka-git-na-khostinge

Чтобы отправить изменения из GitHub на хостинг:

1. Подключитесь к хостингу по SSH.

2. Перейдите в корневую директорию (нужного сайта).

3. Введите команду:
```
    git clone https://github.com/mrradu/regru-hosting.git .
```

Обратите внимание: в конце команды должна стоять точка. Если точки не будет, то в корневой каталог сначала загрузится каталог репозитория, а затем сами файлы.

Тем не менее, из-за обычной заполненности корневого каталога вспомогательными папками с сервера, гит не сможет установить все файлы напрямую в корень, и придётся использовать клонирование без точки. А потом уже переносить с помощью FTP-клиента все файлы, включая скрытые, наверх на один уровень, то есть в корень.

Далее, если это Laravel, т.к. папка с вендорами не установлена по умолчанию при клонировании:

    composer install

Если в конце работы этой команды возникнет проблема с автоматической настройкой автозагрузки классов, то возможно в настройках php отключена функция popen или proc_open.

4. Чтобы загружать файлы на хостинг в будущем, используйте команду 
```
    git pull 
```

https://www.atlassian.com/ru/git/tutorials/syncing/git-pull

    git pull origin master
    
Она позволит синхронизировать файлы хостинга с файлами репозитория.

Готово, вы опубликовали файлы на хостинге.

---

## Группа директив под авторизованного пользователя

```
@if (Route::has('login'))
                
        @auth  {{-- Уже авторизован --}}

            <a >Home</a>

        @else  {{-- Иначе (Не авторизован) --}}

            <a >Log in</a>

            @if (Route::has('register'))

                <a >Register</a>
            
            @endif

        @endauth                
@endif
```




