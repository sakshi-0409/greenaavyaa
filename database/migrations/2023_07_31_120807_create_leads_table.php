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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->integer('lead_id');
            $table->date('date');
            $table->string('source');
            $table->string('leadby');
            $table->string('leadfor');
            $table->string('leadtype');
            $table->string('priority');
            $table->string('status');
            $table->string('company_name');
            $table->string('name');
            $table->string('email');
            $table->string('mobile_no');
            $table->string('whatsapp_no');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('address');
            $table->string('location');
            $table->string('remark');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
