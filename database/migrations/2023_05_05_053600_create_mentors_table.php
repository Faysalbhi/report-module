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
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            ##ELOQUENTRELATIONSHIPCOLUMNS##
            
            
			$table->uuid('uuid')->nullable();
			$table->string('name2', '24');
			$table->string('email2', '32');
			$table->string('address2', '32');
			$table->string('phone2', '32');
			$table->string('subject2','24');
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
        Schema::dropIfExists('mentors');
    }
};
