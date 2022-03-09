<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('customers', function (Blueprint $table) {
        //     $table->renameColumn('id', 'id');
        //     $table->renameColumn('name', 'name');
        //     $table->renameColumn('phone', 'phone');
        //     $table->renameColumn('address', 'address');
        //     $table->renameColumn('email', 'email');
        //     $table->renameColumn('company', 'company');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
