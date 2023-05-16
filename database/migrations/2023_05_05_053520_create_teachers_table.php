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
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            ##ELOQUENTRELATIONSHIPCOLUMNS##
            
            
			$table->uuid('uuid')->nullable();
			$table->string('name', '24');
			$table->string('email', '32');
			$table->string('address', '32');
			$table->string('phone', '32');
			$table->string('subject', '24');
			$table->string('barcode')->nullable();
			$table->string('qrcode')->nullable();
			$table->unsignedBigInteger('created_by')->nullable();
			$table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
