<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('users', function (Blueprint $table) {
        //     // create array for add row in table
            
        //     // add row in table
        //     $table->insert($data);
        // });

        $data = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin@1234'),
            'registerType' => 3,
            'remember_token' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'approved' => '1',
        ];

        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $data = [
                'name' => 'Admin',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('Admin1@1234'),
                'registerType' => 3,
                'remember_token' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'approved' => '1',
            ];
    
            DB::table('users')->insert($data);        });
    }
};
