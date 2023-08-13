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
    public function up()
    {
        Schema::create('sabores', function (Blueprint $table) {
            
            $table->id();
            $table->string('nome', 255);
            $table->timestamps();
            
        });

        DB::table('sabores')->insert(
            array(
                ['nome' => 'Brigadeiro'],
                ['nome' => 'Ganache'],
                ['nome' => 'Amendoim'],
                ['nome' => 'Limão'],
                ['nome' => 'Morango'],
                ['nome' => 'Beijinho']

            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sabores', function (Blueprint $table) {
            //
        });
    }
};
