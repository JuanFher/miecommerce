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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('category_id')->constrained();
            $table->unsignedbigInteger('quantity')->default(0);
            $table->decimal('actual_price', 12, 2)->default(0);
            $table->decimal('previous_price', 12, 2)->default(0);
            $table->text('short_description');
            $table->text('large_description');
            $table->text('specifications');
            $table->text('data_of_interest');
            $table->integer('percentaje_desc')->unsigned()->default(0);
            $table->unsignedbigInteger('visits')->default(0);
            $table->unsignedbigInteger('sales')->default(0);
            $table->string('status');
            $table->char('active', 2);
            $table->char('slider_principal', 2);
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
