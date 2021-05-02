<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('menus', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('menuitemcategoryid');
            $table->string('menuitemcategoryname');
            $table->string('menuitemid');
            $table->string('menuitemname');
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->float('price', 4, 2);
            $table->string('status')->nullable();
            $table->tinyInteger('deleted')->default('0');
            $table->tinyInteger('ispopular')->default('1');
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
        Schema::dropIfExists('menus');
    }
}
