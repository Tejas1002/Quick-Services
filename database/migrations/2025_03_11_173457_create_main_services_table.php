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
// database/migrations/xxxx_xx_xx_create_main_services_table.php
public function up() {
    Schema::create('main_services', function (Blueprint $table) {
        $table->id(); // Auto-incrementing primary key
        $table->string('name'); // Service name
        $table->text('description')->nullable(); // Service description
        $table->string('image')->nullable(); // Service image URL
        $table->timestamps(); // created_at and updated_at timestamps
    });
}

public function down() {
    Schema::dropIfExists('main_services'); // Drop the table if it exists
}
};
