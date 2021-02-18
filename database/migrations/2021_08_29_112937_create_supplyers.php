<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplyers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supply_id');
            $table->integer('brand_id');
            $table->integer('name');
            $table->string('type');
            $table->date('expire');
            $table->integer('price')->default(0);;
            $table->integer('quantity')->default(0);
            $table->enum('activation', ['1', '0']);
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
        Schema::dropIfExists('supplyers');
    }
}
