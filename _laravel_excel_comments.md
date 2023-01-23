## Beyond the code

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

Перед выкладыванием: 

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

## SSH & Git:

https://2domains.ru/support/hosting/rabota-po-ssh

https://2domains.ru/support/hosting/nastroyka-git-na-khostinge


---








