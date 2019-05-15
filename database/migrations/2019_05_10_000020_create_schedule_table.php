<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'schedule';

    /**
     * Run the migrations.
     * @table schedule
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject', 45)->nullable();
            $table->string('description', 45)->nullable();
            $table->date('date_schedule')->nullable();
            $table->unsignedInteger('planning_id');

            $table->index(["planning_id"], 'fk_schedule_planning1_idx');


            $table->foreign('planning_id', 'fk_schedule_planning1_idx')
                ->references('id')->on('planning')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
