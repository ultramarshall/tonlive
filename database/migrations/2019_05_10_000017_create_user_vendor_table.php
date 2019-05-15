<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVendorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_vendor';

    /**
     * Run the migrations.
     * @table user_vendor
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email', 45)->nullable();
            $table->text('password')->nullable();
            $table->string('address')->nullable();
            $table->string('company_name', 45)->nullable();
            $table->string('npwp', 45)->nullable();
            $table->integer('province')->nullable();
            $table->integer('regencies')->nullable();
            $table->integer('districts')->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('fax', 45)->nullable();
            $table->string('office_number', 45)->nullable();
            $table->unsignedInteger('user_vendor_type_id');
            $table->unsignedInteger('bussiness_type_id');

            $table->index(["user_vendor_type_id"], 'fk_user_vendor_user_vendor_type1_idx');

            $table->index(["bussiness_type_id"], 'fk_user_vendor_bussiness_type1_idx');


            $table->foreign('user_vendor_type_id', 'fk_user_vendor_user_vendor_type1_idx')
                ->references('id')->on('user_vendor_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('bussiness_type_id', 'fk_user_vendor_bussiness_type1_idx')
                ->references('id')->on('bussiness_type')
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
