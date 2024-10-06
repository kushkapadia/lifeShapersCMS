<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('mobile');
            $table->string('address');
            $table->string('email')->nullable();
            $table->string('relationship_status')->nullable();
            $table->integer('age')->nullable();
            $table->string('company')->nullable();
            $table->string('mode_of_contact')->nullable();
            $table->string('source')->nullable();
            $table->string('purpose')->nullable();
            $table->string('participants')->nullable();
            $table->integer('no_of_participants')->nullable();
            $table->string('status')->default('prospect'); // prospect or client
            $table->string('client_rating')->nullable(); // beginner by default
            $table->boolean('is_alive')->default(true);
            $table->date('date_of_first_contact')->nullable();
            $table->decimal('remaining_payment', 8, 2)->default(0);
            $table->decimal('total_payment_completed', 8, 2)->default(0);
            $table->integer('total_session_hours_completed')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
