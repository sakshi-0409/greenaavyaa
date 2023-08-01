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
        Schema::create('brokers', function (Blueprint $table) {
            $table->id();
            $table->string('brokerid');
            $table->date('join_date');
            $table->string('work_as');
            $table->string('status');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('email');
            $table->string('mobile');
            $table->string('whatsapp');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('address');
            $table->string('identity_type');
            $table->binary('identity');
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
        Schema::dropIfExists('brokers');
    }
};
