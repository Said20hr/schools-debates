<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCRMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_r_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('title_1')->nullable();//
            $table->string('title_2')->nullable();//
            $table->string('title_3')->nullable();//
            $table->string('title_4')->nullable();//
            $table->string('title_5')->nullable();//
            $table->string('title_6')->nullable();//
            $table->string('note_1')->nullable();//
            $table->string('note_2')->nullable();//
            $table->string('note_3')->nullable();//
            $table->text('text_1')->nullable();//
            $table->text('text_2')->nullable();//
            $table->text('text_3')->nullable();//
            $table->text('text_4')->nullable();//
            $table->text('text_5')->nullable();//
            $table->text('text_6')->nullable();//
            $table->text('description')->nullable();//
            $table->string('address')->nullable();//
            $table->string('phone_1')->nullable();//
            $table->string('phone_2')->nullable();//
            $table->string('email_1')->nullable();//
            $table->string('email_2')->nullable();//
            $table->text('fb')->nullable();//
            $table->text('ig')->nullable();//
            $table->text('yt')->nullable();//
            $table->text('tw')->nullable();//

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
        Schema::dropIfExists('c_r_m_s');
    }
}
