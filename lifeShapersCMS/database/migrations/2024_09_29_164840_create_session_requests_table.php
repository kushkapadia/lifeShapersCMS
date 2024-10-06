<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_requests', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string('clientfName');
            $table->string('clientlName');
            $table->string('mobile');
            $table->string('status'); // Revisit/First visit
            $table->string('requestReceiveMode'); // Request received mode
            $table->string('purpose');
            $table->integer('duration');
            $table->string('participation');
            $table->date('tentativeAppointmentDate');
            $table->time('tentativeStartTime');
            $table->time('tentativeEndTime');
            $table->string('tentativeMode');
            $table->date('sessionRequestDate');
            $table->unsignedBigInteger('contactId'); // Foreign key for contacts table
            $table->string('requestStatus')->default('pending');
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_requests');
    }
}
