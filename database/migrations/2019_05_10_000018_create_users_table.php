<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('status');
            $table->string('email', 45)->nullable();
            $table->string('username', 45)->nullable();
            $table->text('password')->nullable();
            $table->timestamp('create_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('create_user', 45)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_user', 45)->nullable();
            $table->unsignedInteger('roles_id');
            $table->text('remember_token')->nullable();

            $table->index(["status"], 'fk_users_userStatus1_idx');

            $table->index(["roles_id"], 'fk_users_roles1_idx');


            $table->foreign('status', 'fk_users_userStatus1_idx')
                ->references('id')->on('userStatus')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('roles_id', 'fk_users_roles1_idx')
                ->references('id')->on('roles')
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
