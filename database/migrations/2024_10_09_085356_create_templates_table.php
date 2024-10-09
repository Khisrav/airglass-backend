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
        Schema::disableForeignKeyConstraints();

        Schema::create('templates', function (Blueprint $table) {
            $table->id();  // UNSIGNED BIGINT (default)
            $table->string('name');  // Change to string to store template name
            $table->unsignedBigInteger('template_group_id')->index();  // Foreign key for template group
            $table->foreign('template_group_id')->references('id')->on('template_groups')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->index();  // Foreign key for user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
