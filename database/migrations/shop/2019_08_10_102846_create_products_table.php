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
            $table->string('name', 30);
            $table->text('image_url');
            $table->unsignedInteger('quatity_sold')->default(0);
            $table->unsignedInteger('quatity_in_stock')->unsigned();
            $table->text('description');
            $table->string('sku', 10);
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->enum('state', ['deleted' , 'out_of_stock', 'unavailable', 'available'])->default('unavailable');
            $table->decimal('price', 10,2)->default(0);
            $table->timestampTz('availabled_at')->nullable();
            $table->timestamps();

            // relationships
            $table->foreign('brand_id')->references('id')->on('brands');
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
