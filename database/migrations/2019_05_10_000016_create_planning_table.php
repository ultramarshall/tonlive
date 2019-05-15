<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'planning';

    /**
     * Run the migrations.
     * @table planning
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('tender_name', 45)->nullable();
            $table->date('create_tender_date')->nullable();
            $table->text('information')->nullable();
            $table->integer('value')->nullable();
            $table->text('qualification_terms')->nullable();
            $table->unsignedInteger('winnerview_status_id');
            $table->unsignedInteger('planning_status_id');

            $table->index(["winnerview_status_id"], 'fk_planning_winnerview_status1_idx');

            $table->index(["planning_status_id"], 'fk_planning_planning_status1_idx');


            $table->foreign('winnerview_status_id', 'fk_planning_winnerview_status1_idx')
                ->references('id')->on('winnerview_status')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('planning_status_id', 'fk_planning_planning_status1_idx')
                ->references('id')->on('planning_status')
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
