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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('curso')->references("id")->on("curso")->nullable();
            $table->string('area')->references("id")->on("area")->nullable();
            $table->foreignId("modalidad")->references("id")->on("modalidad")->nullable();
            $table->boolean('solicitado')->default(false);
            $table->string('dni')->unique();
            $table->string('genero');
            $table->integer('telefono');
            $table->integer('grupo')->nullable();
            $table->string('direccion');
            $table->string('foto')->nullable();
            $table->string('identificacion')->nullable();
            $table->boolean('activo')->default(false);
            $table->rememberToken();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
