<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteraccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interacciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estudiante')->constrained('estudiantes');
            $table->timestamp('fecha')->default(now());
            $table->string('tipo_interaccion');
            $table->text('comentario')->nullable();
            $table->enum('calificacion', ['muy bueno', 'bueno', 'neutral', 'malo', 'muy malo']);
            $table->string('sede')->nullable();
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
        Schema::dropIfExists('interacciones');
    }
}
