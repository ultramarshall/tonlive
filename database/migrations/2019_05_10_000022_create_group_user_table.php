<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupUserTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'group_user';

    /**
     * Run the migrations.
     * @table group_user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('tbl_users_id');
            $table->unsignedInteger('tbl_groups_id');
            $table->timestamp('create_date')->nullable();
            $table->string('create_user', 45)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_user', 45)->nullable();

            $table->index(["tbl_groups_id"], 'fk_tbl_group_user_tbl_groups1_idx');

            $table->index(["tbl_users_id"], 'fk_tbl_group_user_tbl_users1_idx');


            $table->foreign('tbl_users_id', 'fk_tbl_group_user_tbl_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_groups_id', 'fk_tbl_group_user_tbl_groups1_idx')
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
