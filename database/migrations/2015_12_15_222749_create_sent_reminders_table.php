<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sent_reminders', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('memberid');
            $table->string('title');
            $table->dateTime('userReminderDate');
            $table->dateTime('utcReminderDate');
            $table->text('description');
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
        Schema::drop('sent_reminders');
    }
}
