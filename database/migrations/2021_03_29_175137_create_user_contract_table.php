<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contract', function (Blueprint $table) {
            $table->id();
 $table->unsignedBigInteger('contractUserID');
            $table->string ('contractDuration' ,20);
            $table->string ('contractByHour');
            $table->string ('contractByMonth');
            $table->decimal('contractSalaryByHour', 18 , 3);
            $table->decimal('contractSalaryByMonth', 18 , 3);
            $table->decimal('contractPermittedMin', 18 , 3);
            $table->decimal('contractAfterFifteenMin', 18 , 3);
            $table->decimal('contractAllDayMin', 18 , 3);
            $table->decimal('contractOveTimeByHour', 18 , 3);
            $table->decimal('contractCommession', 18 , 3);
        $table->tinyInteger('contractInsurances')->defualt(1)->comment('1 => Inside the insurance 0 => Out of insurance');
            $table->string ('contractInsurancesNum' , 40);
            $table->decimal('contractInsurancesPercent', 18 , 3);
            $table->decimal('contracInsurancesTotal', 18 , 3);
            $table->decimal('contractInsurancesJob', 18 , 3);
            $table->decimal('contractInsurancesUser', 18 , 3);
            $table->decimal('contractVacations', 18 , 3);
            $table->decimal('contractArda', 18 , 3);
            $table->string ('contractVacationsEjaEtiady', 40);
            $table->string ('contractVacationsEjaNew', 40);
            $table->string ('contractNotes', 100);

            $table->foreign('contractUserID')->references('id')->on('users')
            ->onDelete('cascade');            
            
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
        Schema::dropIfExists('user_contract');
    }
}
