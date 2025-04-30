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
 // database/migrations/xxxx_xx_xx_create_products_table.php
public function up() {
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 10, 2);
        $table->string('image');
        $table->unsignedBigInteger('service_id'); // Foreign key for service
        $table->timestamps();

        // Define foreign key
        $table->foreign('service_id')->references('id')->on('main_services')->onDelete('cascade');
    });
}

public function down() {
    Schema::dropIfExists('products');
}
};
