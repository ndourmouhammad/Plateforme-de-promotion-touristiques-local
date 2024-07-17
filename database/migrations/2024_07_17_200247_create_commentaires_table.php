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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('libelle');
            $table->text('contenu');

            // clé étrangère
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onUpdate('cascade');

            // clé étrangère
            $table->unsignedBigInteger('lieu_id');
            $table->foreign('lieu_id')->references('id')->on('lieus')->onUpdate('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentaires', function (Blueprint $table)
        {
            $table->dropForeign('commentaires_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('commentaires', function (Blueprint $table)
        {
            $table->dropForeign('commentaires_lieu_id_foreign');
            $table->dropColumn('lieu_id');
        });

        Schema::dropIfExists('commentaires');
    }
};
