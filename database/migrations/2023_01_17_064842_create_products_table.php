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
            $table->timestamp('akt_tsen')->nullable();
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
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
