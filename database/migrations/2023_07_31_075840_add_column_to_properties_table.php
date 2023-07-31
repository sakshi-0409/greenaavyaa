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
        Schema::table('properties', function (Blueprint $table) {
            $table->date('property_date');
            $table->string('property_by');
            $table->string('property_type');
            $table->string('priority');
            $table->string('status');
            $table->string('financial');
            $table->string('documents');
            $table->string('age');
            $table->string('demanded_price');
            $table->string('final_price');
            $table->string('property_size');
            $table->string('property_size_unit');
            $table->string('direction');
            $table->string('owner_mob_no');
            $table->string('owner_wp_no');
            $table->string('broker_name');
            $table->string('broker_email');
            $table->string('broker_mob');
            $table->string('broker_wp');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('address');
            $table->string('remark');
            $table->binary('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
};
