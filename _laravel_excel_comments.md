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







