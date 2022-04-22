<?php

use App\Models\Medicamento;
use App\Models\Receta;
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
    public function up()
    {
        Schema::create('receta_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Receta::class)->index()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Medicamento::class)->index()->constrained()->cascadeOnDelete();
            $table->integer('cantidad');
            $table->string('dosis');
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
        Schema::dropIfExists('receta_items');
    }
};
