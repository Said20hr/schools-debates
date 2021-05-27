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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('student');
            $table->boolean('status')->default(false);
            $table->text('avatar')->default('avatar2.svg')->nullable();
            $table->text('id_carte')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('school')->nullable();
            $table->string('level')->nullable();
            $table->string('job')->nullable();
            $table->string('work_place')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('commune')->nullable();
            $table->string('rue')->nullable();
            $table->string('house')->nullable();
            $table->text('id_image')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
