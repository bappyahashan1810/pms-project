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
            $table->text('details');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('generic_id');
            $table->double('price');
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->float('weight');
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->foreign("generic_id")->references("id")->on("generics")->onDelete("cascade");
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
