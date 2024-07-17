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
        Schema::create('lieus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('libelle');
            $table->text('description');
            $table->string('photo');
            $table->string('adresse');
            $table->time('heure_ouverture');
            $table->integer('prix');

            // clé étrangère
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onUpdate('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lieus', function (Blueprint $table)
        {
            $table->dropForeign('lieus_categorie_id_foreign');
            $table->dropColumn('categorie_id');
        });
        Schema::dropIfExists('lieus');
    }
};
