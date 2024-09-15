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
        Schema::create('_viaggi_di_fine_corso', function (Blueprint $table) {
             $table->id();
            $table->string('company', 20); // azienda
            $table->string('slug',100);
            $table->string('departure_station', 50); // stazione_di_partenza
            $table->string('arrival_station', 50); // stazione_di_arrivo
            $table->date('departure_day');//giorno di partenza
            $table->time('departure'); // partenza
            $table->time('arrival'); // arrivo
            $table->tinyInteger('binary');//binario
            $table->string('code', 10)->unique(); // codice
            $table->tinyInteger('num_carriages');// n_carroze
            $table->boolean('on_time')->default(true); // in_orario
            $table->boolean('cancelled')->default(false); // cancellato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_viaggi_di_fine_corso');
    }
};