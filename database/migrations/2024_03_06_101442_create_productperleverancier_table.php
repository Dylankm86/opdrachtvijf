<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productperleverancier', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('leverancier_id'); 
            $table->foreign('leverancier_id')->references('id')->on('leveranciers'); 
            $table->unsignedBigInteger('product_id'); 
            $table->foreign('product_id')->references('id')->on('products'); 
            $table->date('DatumLevering'); 
            $table->integer('Aantal'); 
            $table->date('DatumEerstVolgendeLevering')->nullable();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productperleverancier');
    }
};