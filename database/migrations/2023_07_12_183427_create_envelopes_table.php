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
        Schema::create('envelopes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('envelope_template_id');
            $table->unsignedBigInteger('penanggung_jawab_id');

            $table->string('no_surat');
            $table->date('tanggal');
            $table->json('value');

            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('envelope_template_id')->references('id')->on('envelope_templates');
            $table->foreign('penanggung_jawab_id')->references('id')->on('penanggung_jawabs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envelopes');
    }
};
