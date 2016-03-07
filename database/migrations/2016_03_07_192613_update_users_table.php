<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    protected $authenticationProvidersTable;


    protected $usersTable;

    /**
     * UpdateUsersTable constructor.
     * @param $authenticationProvidersTable
     */
    public function __construct()
    {
        $this->authenticationProvidersTable = Config::get('acacha_socialite.table');
    }


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->authenticationProvidersTable, function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('provider_user_id');
            $table->string('provider');
            $table->string('access_token');
            $table->string('avatar');
            $table->string('name');
            $table->string('nickname')->nullable();;
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
        Schema::drop($this->authenticationProvidersTable);
    }

    /**
     * @param mixed $usersTable
     * @return UpdateUsersTable
     */
    public function setUsersTable($usersTable)
    {
        $this->usersTable = $usersTable;
        return $this;
    }
}
