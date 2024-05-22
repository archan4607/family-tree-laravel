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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');//user id 
            $table->integer('request_id')->nullable();
            $table->integer('request_id')->nullable();
            $table->string('fname',50)->nullable();
            $table->string('lname',50)->nullable();
            $table->enum('role',['1','2','3'])->default('1')
                    ->comment('1 = User, 2 = Admin, 3 = Sub-Admin');
            $table->enum('gender',['1','2'])->default('1')
                    ->comment('1 = Male, 2 = Female');
            $table->enum('martial_status',['1','2'])->default('1')
                    ->comment('1 = Un-Married, 2 = Married');
            $table->enum('user_status',[0,1,2,3,4,5,6])->default(0)
                    ->comment('0 = Default (NOT VERIFIED)
                    1 = Detail registration done
                    2 = Relation Added 
                    3 = Not Registered (data insert by user)
                    4 = Active 
                    5 = In-active
                    6 = Dead');
            $table->enum('user_request',['0','1','2'])->default('0')
                    ->comment('0 = Default(no request),1 = Relation, 2 = Detail');
            $table->date('dob')->nullable();
            $table->bigInteger('mobile')->nullable()->unique();
            $table->string('email',50)->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password_hash')->default("NULL");
            $table->string('password_original')->default("NULL");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
