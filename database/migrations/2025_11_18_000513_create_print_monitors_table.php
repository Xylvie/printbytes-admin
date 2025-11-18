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
        Schema::create('print_monitors', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id');
            $table->string('printer_name');
            $table->string('document');
            $table->integer('pages');
            $table->timestamp('printed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('print_monitors');
    }
};
