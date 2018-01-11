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
            $table->string('name', 191);
            $table->string('slug', 40);
            $table->longText('description', 191);
            $table->integer('qty');
            $table->decimal('regular_price', 10 , 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->tinyInteger('status')->default(0)->index();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('featurs_image', 60);
            $table->longText('images');
            $table->integer('discoutn_condition');
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
