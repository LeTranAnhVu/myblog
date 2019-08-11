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
            $table->bigIncrements('id');
            $table->string('name', 30)->unique();
            $table->text('image_urls');
            $table->unsignedInteger('quantity_sold')->default(0);
            $table->unsignedInteger('quantity_in_stock')->unsigned();
            $table->text('description');
            $table->string('sku', 10)->unique();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->enum('state', ['deleted' , 'out_of_stock', 'unavailable', 'available'])->default('unavailable');
            $table->decimal('price', 10,2)->default(0);
            $table->timestampTz('availabled_at')->nullable();
            $table->timestamps();

            // relationships
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('discount_id')->references('id')->on('discounts');
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
