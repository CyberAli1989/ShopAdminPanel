<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('slug' , 60 )->unique();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('view')->default(0);
            $table->unsignedBigInteger('sell_count')->default(0);
            $table->bigInteger('quantity')->default(0);
            $table->unsignedBigInteger('price');
            $table->string('sku')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
};
