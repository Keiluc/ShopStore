<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->bigInteger('stock')->unsigned()->default(0);
            $table->decimal('current_price', 12,2)->default(0);
            $table->decimal('last_price', 12,2)->default(0);
            $table->integer('discount_rate')->unsigned()->default(0);
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('product_specifications')->nullable();
            $table->text('data_of_interest')->nullable();
            $table->unsignedBigInteger('visits')->default(0);
            $table->unsignedBigInteger('sales')->default(0);
            $table->string('state');
            $table->char('active',2);
            $table->char('slider',2);
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
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
