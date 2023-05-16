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
        Schema::create('plan_demands', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->nullable();
            $table->string('qrcode')->nullable();
            $table->integer('uuid');
            $table->string('part_no')->nullable();
            $table->string('section_ref_no')->nullable();
            $table->string('name_of_description');
            $table->string('ph_base_unit')->nullable();
            $table->string('ph_sqn_sec_flt')->nullable();
            $table->integer('qty');
            $table->string('unit');
            $table->string('currency');
            $table->string('recom_by_opi')->nullable();
            $table->integer('estm_unit_price');
            $table->integer('total_cost');
            $table->string('justification')->nullable();
            $table->string('range');
            $table->integer('range_id');
            $table->integer('range_uuid');
            $table->string('office');
            $table->integer('office_id');
            $table->integer('office_uuid');
            $table->string('budgetcode');
            $table->string('budgetcode_old');
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
        Schema::dropIfExists('plan_demands');
    }
};
