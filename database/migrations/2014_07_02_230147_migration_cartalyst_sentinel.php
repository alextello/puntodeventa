<?php

/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.16
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2017, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MigrationCartalystSentinel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('activations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('persistences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('code');
        });

        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->text('permissions')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('slug');
        });

        Schema::create('role_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->nullableTimestamps();

            $table->engine = 'InnoDB';
            $table->primary(['user_id', 'role_id']);
        });

        Schema::create('throttle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->index('user_id');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->string('username')->unique();
            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('telefono')->nullable();
            $table->string('residencia')->nullable();
            $table->date('nacimiento');
            $table->string('genero');
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
            $table->unique('email');
        });


    Schema::create('servicio', function (Blueprint $table) {
        $table->increments('id');
        $table->string('codigo')->unique();
        $table->string('tipo');
        $table->string('descripcion');
        $table->float('costo')->nullable();
        $table->timestamps();
        $table->engine = 'InnoDB';
    });


Schema::create('citas', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('idUser')->unsigned();
    $table->integer('idAdmin');
    $table->integer('idServicio')->unsigned();
    $table->date('fecha');
    $table->time('hora');
    $table->text('descripcion')->nullable();
    $table->boolean('estado')->nullable();
    $table->boolean('solicitud')->nullable();
    $table->timestamps();
    $table->foreign('idUser')->references('id')->on('users');
    $table->foreign('idServicio')->references('id')->on('servicio');
    $table->engine = 'InnoDB';
});
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activations');
        Schema::drop('persistences');
        Schema::drop('reminders');
        Schema::drop('roles');
        Schema::drop('role_users');
        Schema::drop('throttle');
        Schema::drop('detalleUsers');
        Schema::drop('users');
        Schema::drop('departamentos');
        Schema::drop('municipios');
    }
}
