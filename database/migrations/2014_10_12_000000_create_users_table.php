<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('avatar')->nullable(true);
            $table->string('user_name')->unique();
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('email')->unique();
            $table->integer('role_id')->default(0);
            $table->string('password');
            $table->char('land_line',11)->nullable(true);
            $table->char('mobile',11)->nullable(true)->unique();
            $table->text('address')->nullable(true);
            $table->char('zip',10)->nullable(true);
            $table->tinyInteger('gender')->nullable(true);
            $table->string('occupation')->nullable(true);
            $table->tinyInteger('verified')->default(0);
            $table->unsignedBigInteger('created_by')->nullable(false);
            $table->unsignedBigInteger('updated_by')->nullable(true);
            $table->string('email_token')->nullable(true);
            $table->rememberToken();
            $table->bigInteger('revisions')->default(0);
            $table->dateTime('last_seen')->nullable(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable(true);
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
