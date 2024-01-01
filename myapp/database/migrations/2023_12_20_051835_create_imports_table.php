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
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->date('impdate'); 
            $table->bigInteger('pcode')->unsigned(); 
            $table->foreign('pcode')->references('id')->on('products'); 
            $table->integer('quantity'); 
            $table->bigInteger('supid')->unsigned(); 
            $table->foreign('supid')->references('id')->on('suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imports');
    }
};
