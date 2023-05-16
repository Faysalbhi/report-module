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
        Schema::create('pcms', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->nullable();
            $table->string('qrcode')->nullable();
            $table->integer('uuid');
            $table->string('title');
            $table->string('short_description')->nullable();
            $table->timestamp('meetig_held_at')->nullable();
            $table->integer('finyear');
            $table->integer('finyear_id');
            $table->integer('finyear_uuid');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pcms');
    }
};
