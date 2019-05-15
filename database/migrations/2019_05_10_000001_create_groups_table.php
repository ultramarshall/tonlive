<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'groups';

    /**
     * Run the migrations.
     * @table groups
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('group_name')->nullable();
            $table->tinyInteger('aktif')->nullable();
            $table->timestamp('create_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('create_user', 45)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_user', 45)->nullable();
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
