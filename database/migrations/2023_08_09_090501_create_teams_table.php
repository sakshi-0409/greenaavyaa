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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_id');
            $table->string('date');
            $table->string('department');
            $table->string('designation');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('email');
            $table->string('mobile');
            $table->string('whatsapp');
            $table->string('education');
            $table->string('status');
            $table->binary('identity');
            $table->binary('resume');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('current_address');
            $table->string('permanent_address');
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
        Schema::dropIfExists('teams');
    }
};
