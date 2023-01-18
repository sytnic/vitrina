<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    // создано так:
    // php artisan make:migration create_products_table --create=products

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // bigint(20) unsigned Автоматическое приращение

            $table->string('name');  // VARCHAR, не более 255 символов, 
            $table->string('firma'); // но отработает Schema::defaultStringLength(191) 
                                     // в app\Providers\AppServiceProvider.php
            $table->string('code');
            $table->unsignedMediumInteger('kolvo'); // MEDIUMINT, unsigned, <= 16777215
            $table->float('tsena', 8, 0);  // точность плавающего числа
            $table->text('opisanie')->nullable(); // TEXT, не более 65 535 символов
            $table->string('photo')->nullable();
            $table->string('group');
            $table->unsignedInteger('prodano'); // INT, unsigned, <= 4294967295
            $table->unsignedSmallInteger('vputi'); // SMALLINT, unsigned, <= 65535
            $table->float('zakup', 8, 2);  // точность плавающего числа

            $table->string('akt_tsen')->nullable();
            // $table->timestamp('akt_tsen')->nullable();
            // если есть значения 0000-00-00 00:00:00, то не будет работать с типом timestamp, потому что
            // The range for DATETIME values is '1000-01-01 00:00:00.000000' to '9999-12-31 23:59:59.999999',
            // and the range for TIMESTAMP values is '1970-01-01 00:00:01.000000' to '2038-01-19 03:14:07.999999'
            // https://dev.mysql.com/doc/refman/8.0/en/datetime.html

            $table->string('analogi')->nullable();
            $table->string('identifikator');
            $table->timestamp('datetime')->nullable();
            $table->string('tochka');
            $table->text('info_tochki')->nullable();
            $table->string('geo_tochki')->nullable();
            $table->string('phone')->nullable();

            $table->timestamps();

            $table->softDeletes(); // будущий столбец deleted_at
        });
    }

    /**
     * Reverse the migrations.
     * 
     * php artisan migrate:rollback --step=1
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
