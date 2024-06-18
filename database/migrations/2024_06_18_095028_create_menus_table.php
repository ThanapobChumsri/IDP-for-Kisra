<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_menu_id');
            // $table->foreign('type_menu_id')->references('id')->on('type_menus');
            $table->json('material')->nullable();
            $table->text('image')->nullable();
            $table->text('detail')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('cal', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}

