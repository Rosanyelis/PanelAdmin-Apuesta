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
            $table->uuid('id')->primary();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('dni')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('responsable')->nullable();
            $table->string('rif')->nullable();
            $table->string('tipo_venta')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('url_avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->uuid('role_id');
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->uuid('agency_id')->nullable();
            $table->uuid('country_id')->nullable();
            $table->uuid('currency_id')->nullable();
            $table->string('promotional_code')->nullable();
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
