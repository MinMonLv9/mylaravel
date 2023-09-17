<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoprequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoprequests', function (Blueprint $table) {
            $table->id();
            $table->string('shopname');
            $table->string('address');
            $table->string('township');
            $table->string('membername')->nullable();
            $table->string('city');
            $table->string('email');
            $table->string('password');
            $table->text('shoplogo')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('shoprequests');
    }
}
