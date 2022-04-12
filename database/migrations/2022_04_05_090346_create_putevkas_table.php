<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putevkas', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->date('date_buy')->nullable();
            $table->date('date_in');
            $table->date('date_out')->nullable();

            //FK для связи пользователя и путевки
            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'putevka_user_idx');
            $table->foreign('user_id','putevka_user_fk')->on('users')->references('id');

            //FK для связи путевки и комнаты
            $table->unsignedBigInteger('room_id')->nullable();
            $table->index('room_id', 'putevka_room_idx');
            $table->foreign('room_id','putevka_room_fk')->on('rooms')->references('id');

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
        Schema::dropIfExists('putevkas');
    }
};
