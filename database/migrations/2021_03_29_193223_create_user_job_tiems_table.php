<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserJobTiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_job_tiems', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('UserJobTimesUserID');
            // $table->unsignedBigInteger('UserJobTimesCurrentUser');
            $table->unsignedBigInteger('UserJobTimesContractID');

            $table->tinyInteger('UserJobTimesSaturday');
            $table->string('UserJobTimesSaturFrom' ,20);
            $table->string('UserJobTimesSaturdayTo' ,20);
            $table->decimal('UserJobTimesSaturdayHour', 18 ,3);

            $table->tinyInteger('UserJobTimesSunday');
            $table->string('UserJobTimesSundayFrom' ,20);
            $table->string('UserJobTimesSundayTo' ,20);
            $table->decimal('UserJobTimesSundayHour', 18 ,3);

            $table->tinyInteger('UserJobTimesMonday');
            $table->string('UserJobTimesMondayFrom' ,20);
            $table->string('UserJobTimesMondayTo' ,20);
            $table->decimal('UserJobTimesMondayHour', 18 ,3);

            $table->tinyInteger('UserJobTimesTuseday');
            $table->string('UserJobTimesTusedayFrom' ,20);
            $table->string('UserJobTimesTusedayTo' ,20);
            $table->decimal('UserJobTimesTusedayHour', 18 ,3);            

            $table->tinyInteger('UserJobTimesWednesday');
            $table->string('UserJobTimesWednesdayFrom' ,20);
            $table->string('UserJobTimesWednesdayTo' ,20);
            $table->decimal('UserJobTimesWednesdayHour', 18 ,3);    
            
            $table->tinyInteger('UserJobTimesThrusday');
            $table->string('UserJobTimesThrusdayFrom' ,20);
            $table->string('UserJobTimesThrusdaydayTo' ,20);
            $table->decimal('UserJobTimesThrusdayHour', 18 ,3);

            $table->tinyInteger('UserJobTimesFriday');
            $table->string('UserJobTimesFridayFrom' ,20);
            $table->string('UserJobTimesFridaydayTo' ,20);
            $table->decimal('UserJobTimesFridayHour', 18 ,3);

            $table->foreign('userJobTimesContractID')->references('id')->on('user_contract')
            ->onDelete('cascade');
            $table->timestamps();            
        });
        
    } // end of create

    public function down()
    {
        Schema::dropIfExists('user_job_tiems');

    } // end ofdown
}
