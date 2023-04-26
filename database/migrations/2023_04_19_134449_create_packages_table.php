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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longtext('description');
            $table->string('location');
            $table->string('price')->nullable();
            $table->string('tags')->nullable();
            $table->integer('numberOfdaysItenary');
            $table->string('coverImage')->nullable();
            for($i=1;$i<51;$i++){
                $table->string('itenaryday'.$i)->nullable();
            }
            $table->string('longDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
