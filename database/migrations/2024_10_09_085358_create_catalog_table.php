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

        Schema::create('catalog', function (Blueprint $table) {
            $table->id();  // This creates an UNSIGNED BIGINT by default
            $table->string('img')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('purchase_price')->default(0);
            $table->bigInteger('retail_price')->default(0);
            $table->string('unit')->nullable();
            $table->string('vendor_code')->nullable();
            $table->unsignedBigInteger('catalog_group_id')->index();  // Set this to UNSIGNED BIGINT
            $table->foreign('catalog_group_id')->references('id')->on('catalog_groups')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog');
    }
};
