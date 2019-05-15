<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'discussion';

    /**
     * Run the migrations.
     * @table discussion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('comment', 45)->nullable();
            $table->unsignedInteger('planning_id');
            $table->unsignedInteger('user_vendor_id');

            $table->index(["planning_id"], 'fk_discussion_planning1_idx');

            $table->index(["user_vendor_id"], 'fk_discussion_user_vendor1_idx');


            $table->foreign('planning_id', 'fk_discussion_planning1_idx')
                ->references('id')->on('planning')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_vendor_id', 'fk_discussion_user_vendor1_idx')
                ->references('id')->on('user_vendor')
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
