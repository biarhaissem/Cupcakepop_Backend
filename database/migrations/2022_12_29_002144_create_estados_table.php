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
        Schema::create('estados', function (Blueprint $table) {

            $table->id();
            $table->char('uf', 2);
            $table->timestamps();
   
        });

        DB::table('estados')->insert(
            array(
                ['uf' => 'AC'],
                ['uf' => 'AL'],
                ['uf' => 'AP'],
                ['uf' => 'AM'],
                ['uf' => 'BA'],
                ['uf' => 'CE'],
                ['uf' => 'ES'],
                ['uf' => 'DF'],
                ['uf' => 'MA'],
                ['uf' => 'MT'],
                ['uf' => 'MS'],
                ['uf' => 'MG'],
                ['uf' => 'PA'],
                ['uf' => 'PB'],
                ['uf' => 'PR'],
                ['uf' => 'PE'],
                ['uf' => 'PI'],
                ['uf' => 'RJ'],
                ['uf' => 'RN'],
                ['uf' => 'RS'],
                ['uf' => 'RO'],
                ['uf' => 'RR'],
                ['uf' => 'SC'],
                ['uf' => 'SP'],
                ['uf' => 'SE'],
                ['uf' => 'TO']
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
        Schema::dropIfExists('estados');
        // Schema::table('estados', function (Blueprint $table) { });

    }
};
