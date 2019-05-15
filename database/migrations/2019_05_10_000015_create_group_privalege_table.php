<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupPrivalegeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'group_privalege';

    /**
     * Run the migrations.
     * @table group_privalege
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('tbl_groups_id');
            $table->integer('read')->nullable();
            $table->integer('add')->nullable();
            $table->integer('edit')->nullable();
            $table->integer('delete')->nullable();
            $table->integer('print')->nullable();
            $table->integer('send')->nullable();
            $table->timestamp('create_date')->nullable();
            $table->string('create_user', 45)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_user', 45)->nullable();

            $table->index(["tbl_groups_id"], 'fk_tbl_group_privalege_tbl_groups1_idx');


            $table->foreign('tbl_groups_id', 'fk_tbl_group_privalege_tbl_groups1_idx')
                ->references('id')->on('groups')
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
