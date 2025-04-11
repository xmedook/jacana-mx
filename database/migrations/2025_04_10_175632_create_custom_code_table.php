<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('custom_code', function (Blueprint $table) {
            $table->id();
            $table->text('css_head')->nullable();
            $table->text('js_head')->nullable();
            $table->text('css_body')->nullable();
            $table->text('js_body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_code');
    }
};
