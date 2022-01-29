<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // idiomas
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('name')->comment(''); // 
            $table->string('short_name')->comment('abreviatura'); // 
            $table->timestamps(); //
            $table->string('url_image')->nullable()->comment('url de la imagen'); //
            $table->softDeletes()->comment('borrar registro'); // 
        });
        // monedas
        Schema::create('coins', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('name')->comment('nombre Quetzal o dolar'); //
            $table->string('short_name')->comment('abreviatura'); // 
            $table->timestamps(); //
            $table->string('url_image')->nullable()->comment('url de la imagen'); //
            $table->softDeletes()->comment('borrar registro'); // 
        });
        // paises
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('name')->comment('nombre del pais - country'); //
            $table->string('code_phone')->nullable()->comment('codigo de telefono'); //
            $table->string('code_country')->nullable()->comment('codigo pais'); // 
            $table->string('url_image')->nullable()->comment('url de la imagen'); //
            $table->timestamps(); //
            $table->softDeletes()->comment('borrar registro'); // 
        });

        // departamentos o estados
        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('name')->comment('');
            $table->unsignedBigInteger('country_id')->comment('');
            $table->foreign('country_id')->references('id')->on('countries')->comment('');
            $table->timestamps(); //
            $table->softDeletes()->comment('borrar registro'); // 
        });

        // municipios o ciudades
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('name')->comment('');
            $table->unsignedBigInteger('states_id')->comment('');
            $table->foreign('states_id')->references('id')->on('states');
            $table->timestamps(); //
            $table->softDeletes()->comment('borrar registro'); // 
        });
        
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->string('second_name')->nullable()->comment('segundo nombre'); //
            $table->string('lastname')->nullable()->comment('apellido'); //
            $table->string('second_lastname')->nullable()->comment('segundo apellido'); //
            $table->string('email')->unique()->comment('');
            $table->timestamp('email_verified_at')->nullable()->comment('');
            $table->string('password')->comment(''); 
            $table->string('phone', 50)->nullable()->unique()->comment('');
            $table->date('birthday')->nullable()->comment('fecha de nacimiento'); 
            $table->string('url_image')->nullable()->comment('url de la imagen'); //
            $table->text('address')->nullable()->comment('direccion de residencia'); //
            $table->integer('gender')->default(3)->comment('genro 0-no binario, 1-hombre, 2-Mujer, 3-prefiero no decirlo'); //
            $table->string('job_position')->nullable()->comment(''); //
            $table->bigInteger('legal_id')->unique()->nullable()->comment('Codigo de identificacion DPI'); //
            $table->boolean('is_verified_id')->default(false)->comment('true 1 , false 0'); //
            $table->integer('civil_status')->default(3)->comment('0-soltero, 1-casado, 2-viudo, 3-prefiero no decirlo'); //
            $table->string('education')->nullable()->comment('Maestria, Universidad, Diversificado, Basicos'); //
            

            /*******codigo de pais de nacimiento*******/
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            /*******codigo de pais de nacimiento*******/
            /*******codigo de departamento de nacimiento*******/
            $table->unsignedBigInteger('states_id')->nullable();
            $table->foreign('states_id')->references('id')->on('states');
            /*******codigo de departamento de nacimiento*******/
            /*******codigo de municipio de nacimiento*******/
            $table->unsignedBigInteger('cities_id')->nullable();
            $table->foreign('cities_id')->references('id')->on('cities');
            /*******codigo de municipio de nacimiento*******/
            $table->rememberToken();
            $table->timestamps();
        });


        //datos financieros del usuario
        Schema::create('economy_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('');
            $table->float('monthly_income')->nullable()->comment('ingresos mensuales');
            $table->float('monthly_expenses')->default(false)->comment('egresos mensuales'); 
            $table->integer('civil_status')->default(3)->comment(''); 
            $table->integer('job_type')->nullable()->comment('1-asalariado o 2-independiente '); 
            $table->timestamps();
            $table->softDeletes()->comment('borrar registro'); // 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('economy_users');
        Schema::dropIfExists('users');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('states');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('coins');
        Schema::dropIfExists('languages');
    }
}
