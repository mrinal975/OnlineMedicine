<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productName');
            $table->integer('subcategoryId');
            $table->float('productBought',8,2);
            $table->float('productPrice',8,2);
            $table->integer('productQuantity');
            $table->text('productShortDescriptoin');
            $table->string('type');
            $table->string('brand');
            $table->string('genericName');
            $table->text('productImage');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('products');
    }
}
